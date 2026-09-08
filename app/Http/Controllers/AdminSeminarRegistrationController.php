<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use App\Models\SeminarRegistration;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminSeminarRegistrationController extends Controller
{
    public function index(Request $request): View
    {
        $query = SeminarRegistration::with([
            'seminar',
            'user',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Search
        |--------------------------------------------------------------------------
        */
        if ($request->filled('search')) {
            $search = trim($request->search);

            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('whatsapp', 'like', "%{$search}%")
                    ->orWhere('nama_usaha', 'like', "%{$search}%")
                    ->orWhereHas('seminar', function ($seminarQuery) use ($search) {
                        $seminarQuery->where('judul', 'like', "%{$search}%");
                    });
            });
        }

        /*
        |--------------------------------------------------------------------------
        | Filter Seminar
        |--------------------------------------------------------------------------
        */
        if ($request->filled('seminar_id')) {
            $query->where('seminar_id', $request->seminar_id);
        }

        /*
        |--------------------------------------------------------------------------
        | Filter Status
        |--------------------------------------------------------------------------
        */
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $registrations = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $seminars = Seminar::orderBy('tanggal', 'desc')->get();

        /*
        |--------------------------------------------------------------------------
        | Statistik
        |--------------------------------------------------------------------------
        */
        $totalRegistrations = SeminarRegistration::count();

        $registeredCount = SeminarRegistration::where(
            'status',
            'registered'
        )->count();

        $confirmedCount = SeminarRegistration::where(
            'status',
            'confirmed'
        )->count();

        $attendedCount = SeminarRegistration::where(
            'status',
            'attended'
        )->count();

        return view(
            'admin.seminar.registrations.index',
            compact(
                'registrations',
                'seminars',
                'totalRegistrations',
                'registeredCount',
                'confirmedCount',
                'attendedCount'
            )
        );
    }

    public function show(SeminarRegistration $registration): View
{
    $registration->load([
        'seminar',
        'user',
    ]);

    return view(
        'admin.seminar.registrations.show',
        compact('registration')
    );
}

    public function updateStatus(
        Request $request,
        SeminarRegistration $registration
    ) {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:registered,confirmed,attended,cancelled',
            ],
        ]);

        $registration->update([
            'status' => $validated['status'],
        ]);

        return back()->with(
            'success',
            'Status pendaftaran berhasil diperbarui.'
        );
    }
}