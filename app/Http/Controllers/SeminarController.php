<?php

namespace App\Http\Controllers;

use App\Models\Seminar;

class SeminarController extends Controller
{
    public function index()
    {
        $seminars = Seminar::where('status', 'published')
            ->orderBy('tanggal', 'asc')
            ->get();

        return view('seminar.index', compact('seminars'));
    }

    public function show(string $slug)
    {
        $seminar = Seminar::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('seminar.show', compact('seminar'));
    }
}