<?php

namespace App\Http\Controllers;

use App\Models\OldActivities;
use Illuminate\Http\Request;

class OldActivitiesController extends Controller
{
    public function store(Request $request)
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
            $imagePath = $request->file('image')->store('images/old_activities', 'public');
        }

        $blog = new OldActivities();
        $blog->title = $request->title;
        $blog->content = $request->input('content');
        $blog->is_active = true;
        $blog->image = $imagePath ?? null;
        $blog->save();

        return redirect()->back()->with('success', 'Eski Aktivite başarılı bir şekilde oluşturuldu');
    }

    public function update(OldActivities $oldActivity, Request $request)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/old_activities', 'public');
            $oldActivity->image = $imagePath;
        }

        $oldActivity->title = $request->title;
        $oldActivity->content = $request->input('content');
        $oldActivity->save();

        return redirect()->back()->with('success', 'Eski Aktivite başarılı bir şekilde güncellendi');
    }

    public function destroy(OldActivities $oldActivity)
    {
        $oldActivity->delete();

        return redirect()->back()->with('success', 'Eski Aktivite başarılı bir şekilde silindi');
    }
}
