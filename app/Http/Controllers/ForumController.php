<?php

namespace App\Http\Controllers;

use App\Models\Category;

class ForumController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('threads')
            ->orderBy('nama_kategori')
            ->get();

        return view('forum.index', compact('categories'));
    }
}