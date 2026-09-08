<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class PublicProfileController extends Controller
{
    public function show(User $user): View
{
    $user->load('links');

    $threads = $user->threads()
        ->with('category')
        ->withCount('replies')
        ->where('status', 'published')
        ->latest()
        ->take(5)
        ->get();

    $replies = $user->replies()
        ->with('thread')
        ->latest()
        ->take(5)
        ->get();

    return view('profile.public', compact(
        'user',
        'threads',
        'replies'
    ));
}
}