<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Menampilkan halaman konsultasi.
     */
    public function create()
    {
        return view('consultation.create');
    }

    /**
     * Menyimpan pengajuan konsultasi.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],

            'email' => ['required', 'email', 'max:255'],

            'whatsapp' => ['required', 'string', 'max:30'],

            'nama_usaha' => ['nullable', 'string', 'max:255'],

            'jenis_usaha' => ['nullable', 'string', 'max:255'],

            'layanan' => [
                'required',
                'string',
                'max:255',
            ],

            'masalah' => [
                'required',
                'string',
                'max:5000',
            ],

            'tujuan' => [
                'nullable',
                'string',
                'max:5000',
            ],

            'preferensi_waktu' => [
                'nullable',
                'string',
                'max:255',
            ],

            'budget' => [
                'nullable',
                'integer',
                'min:0',
            ],

            'agreement' => [
                'accepted',
            ],
        ], [
            'nama.required' => 'Nama wajib diisi.',

            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',

            'whatsapp.required' => 'Nomor WhatsApp wajib diisi.',

            'layanan.required' => 'Silakan pilih layanan konsultasi.',

            'masalah.required' => 'Ceritakan masalah bisnis yang ingin dikonsultasikan.',

            'budget.integer' => 'Budget harus berupa angka.',

            'agreement.accepted' =>
                'Kamu harus menyetujui ketentuan konsultasi.',
        ]);

        Consultation::create([
            'user_id' => auth()->id(),

            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'whatsapp' => $validated['whatsapp'],

            'nama_usaha' => $validated['nama_usaha'] ?? null,
            'jenis_usaha' => $validated['jenis_usaha'] ?? null,

            'layanan' => $validated['layanan'],

            'masalah' => $validated['masalah'],

            'tujuan' => $validated['tujuan'] ?? null,

            'preferensi_waktu' =>
                $validated['preferensi_waktu'] ?? null,

            'budget' => $validated['budget'] ?? null,

            'status' => 'pending',
        ]);

        return redirect()
            ->route('consultation.success')
            ->with(
                'success',
                'Pengajuan konsultasi berhasil dikirim.'
            );
    }

    /**
     * Halaman setelah pengajuan berhasil.
     */
    public function success()
    {
        return view('consultation.success');
    }
}