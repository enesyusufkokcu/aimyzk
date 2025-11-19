<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\OldActivities;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard');
    }

    public function blogCreateIndex()
    {
        return view('pages.admin.blog.create');
    }

    public function blogIndex()
    {
        $blogs = Blog::all();
        return view('pages.admin.blog.index', [
            'blogs' => $blogs,
        ]);
    }

    public function blogEdit(Blog $blog)
    {
        return view('pages.admin.blog.edit', [
            'blog' => $blog,
        ]);
    }

    public function oldActivityCreateIndex()
    {
        return view('pages.admin.old-activities.create');
    }

    public function oldActivityIndex()
    {
        $oldActivities = OldActivities::all();
        return view('pages.admin.old-activities.index', [
            'oldActivities' => $oldActivities,
        ]);
    }

    public function oldActivityEdit(OldActivities $oldActivity)
    {
        return view('pages.admin.old-activities.edit', [
            'oldActivity' => $oldActivity,
        ]);
    }

    public function blogStore(Request $request)
    {
        $request->validate(
            [
                'title' => ['required'],
                'content' => ['required'],
                'image' => ['nullable', 'mimes:jpg,png,jpeg', 'max:2048'],
            ],
            [
                'required' => ':attribute alanı zorunludur.',
                'max' => ':attribute alanı en fazla :max karakter olmalıdır.',
                'mimes' => ':attribute alanı JPG, JPEG veya PNG formatında olabilir.',
            ],
            [
                'title' => 'Başlık',
                'content' => 'Metin',
                'image' => 'Resim',
            ],
        );

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->input('content');
        $blog->is_active = true;
        $blog->image = $imagePath ?? null;
        $blog->save();

        return redirect()->back()->with('success', 'Blog başarılı bir şekilde oluşturuldu');
    }

    public function blogUpdate(Blog $blog, Request $request)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $blog->image = $imagePath;
        }

        $blog->title = $request->title;
        $blog->content = $request->input('content');
        $blog->save();

        return redirect()->back()->with('success', 'Blog başarılı bir şekilde güncellendi');
    }

    public function blogDelete(Blog $blog)
    {
        $blog->delete();

        return redirect()->back()->with('success', 'Blog başarılı bir şekilde silindi');
    }
}
