<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Show Index Page
    public function BlogIndex($page=0)
    {
        $entries = \App\Blogposts::orderBy('created_at', 'desc')
        ->where('visible', 1)
        ->paginate(20);
        return view('home', ['entries' => $entries]);
    }
}
