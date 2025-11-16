<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogIndex()
    {
        $blogs = Blog::all();
        return view('pages.blog', [
            'blogs' => $blogs,
        ]);
    }

    public function blogDetail(Blog $blog)
    {
        return view('pages.blog-detail', [
            'blog' => $blog,
        ]);
    }
}
