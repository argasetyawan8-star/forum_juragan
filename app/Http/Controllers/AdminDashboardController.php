<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Seminar;
use App\Models\Thread;
use App\Models\User;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        $totalUsers = User::count();

        $totalThreads = Thread::count();

        $totalSeminars = Seminar::count();

        $totalConsultations = Consultation::count();

        $publishedSeminars = Seminar::where('status', 'published')
            ->count();

        $recentSeminars = Seminar::orderBy('tanggal', 'asc')
            ->take(5)
            ->get();

        $recentThreads = Thread::with(['user', 'category'])
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard.index', compact(
            'totalUsers',
            'totalThreads',
            'totalSeminars',
            'totalConsultations',
            'publishedSeminars',
            'recentSeminars',
            'recentThreads'
        ));
    }
}