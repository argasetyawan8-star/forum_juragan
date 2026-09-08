<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use App\Models\Thread;

class HomeController extends Controller
{
    public function index()
    {
        $latestThreads = Thread::with(['user', 'category'])
            ->withCount('replies')
            ->where('status', 'published')
            ->orderByDesc('is_pinned')
            ->latest()
            ->take(3)
            ->get();

        $upcomingSeminars = Seminar::where('status', 'published')
            ->whereDate('tanggal', '>=', today())
            ->orderBy('tanggal', 'asc')
            ->take(3)
            ->get();

        return view('home.index', compact(
            'latestThreads',
            'upcomingSeminars'
        ));
    }
}