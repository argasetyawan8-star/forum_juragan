<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class AdminConsultationController extends Controller
{
    public function index(Request $request)
    {
        $query = Consultation::query();

        // Search
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('whatsapp', 'like', "%{$search}%")
                    ->orWhere('nama_usaha', 'like', "%{$search}%");
            });
        }

        // Filter status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter layanan
        if ($request->filled('layanan')) {
            $query->where('layanan', $request->layanan);
        }

        $consultations = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view(
            'admin.consultation.index',
            compact('consultations')
        );
    }

    public function updateStatus(
        Request $request,
        Consultation $consultation
    ) {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:pending,contacted,scheduled,completed,cancelled',
            ],
        ]);

        $consultation->update([
            'status' => $validated['status'],
        ]);

        return back()->with(
            'success',
            'Status konsultasi berhasil diperbarui.'
        );
    }

    public function destroy(Consultation $consultation)
    {
        $consultation->delete();

        return back()->with(
            'success',
            'Pengajuan konsultasi berhasil dihapus.'
        );
    }
}