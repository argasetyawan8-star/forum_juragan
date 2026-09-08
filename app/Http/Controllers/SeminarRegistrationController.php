<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use App\Models\SeminarRegistration;
use Illuminate\Http\Request;

class SeminarRegistrationController extends Controller
{
    public function create(string $slug)
    {
        $seminar = Seminar::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('seminar.register', compact('seminar'));
    }

    public function store(Request $request, string $slug)
    {
        $seminar = Seminar::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $validated = $request->validate(
            [
                'nama' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'whatsapp' => ['required', 'string', 'max:30'],
                'nama_usaha' => ['nullable', 'string', 'max:255'],
                'jenis_usaha' => ['nullable', 'string', 'max:255'],
                'harapan' => ['nullable', 'string', 'max:2000'],
                'agreement' => ['accepted'],
            ],
            [
                'nama.required' => 'Nama wajib diisi.',
                'nama.max' => 'Nama maksimal 255 karakter.',

                'email.required' => 'Email wajib diisi.',
                'email.email' => 'Format email tidak valid.',
                'email.max' => 'Email maksimal 255 karakter.',

                'whatsapp.required' => 'Nomor WhatsApp wajib diisi.',
                'whatsapp.max' => 'Nomor WhatsApp maksimal 30 karakter.',

                'nama_usaha.max' => 'Nama usaha maksimal 255 karakter.',
                'jenis_usaha.max' => 'Jenis usaha maksimal 255 karakter.',

                'harapan.max' => 'Harapan maksimal 2000 karakter.',

                'agreement.accepted' => 'Kamu harus menyetujui ketentuan pendaftaran.',
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | Cek email yang sudah terdaftar
        |--------------------------------------------------------------------------
        */
        $alreadyRegistered = SeminarRegistration::where('seminar_id', $seminar->id)
            ->where('email', $validated['email'])
            ->exists();

        if ($alreadyRegistered) {
            return back()
                ->withInput()
                ->with(
                    'error',
                    'Email tersebut sudah terdaftar pada seminar ini.'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Cek kapasitas seminar
        |--------------------------------------------------------------------------
        */
        if ($seminar->kapasitas !== null) {
            $jumlahPeserta = SeminarRegistration::where(
                'seminar_id',
                $seminar->id
            )->count();

            if ($jumlahPeserta >= $seminar->kapasitas) {
                return back()
                    ->withInput()
                    ->with(
                        'error',
                        'Maaf, kuota seminar ini sudah penuh.'
                    );
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Simpan pendaftaran
        |--------------------------------------------------------------------------
        */
        SeminarRegistration::create([
            'seminar_id' => $seminar->id,
            'user_id' => auth()->id(),

            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'whatsapp' => $validated['whatsapp'],

            'nama_usaha' => $validated['nama_usaha'] ?? null,
            'jenis_usaha' => $validated['jenis_usaha'] ?? null,
            'harapan' => $validated['harapan'] ?? null,

            'status' => 'registered',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Redirect halaman sukses
        |--------------------------------------------------------------------------
        */
        return redirect()->route(
            'seminar.register.success',
            $seminar->slug
        );
    }

    public function success(string $slug)
    {
        $seminar = Seminar::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('seminar.success', compact('seminar'));
    }
}