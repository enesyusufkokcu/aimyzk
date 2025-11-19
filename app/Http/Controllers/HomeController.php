<?php

namespace App\Http\Controllers;

use App\Models\OldActivities;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $oldActivities = OldActivities::where('is_active', true)->get();
        
        return view('pages.welcome', [
            'oldActivities' => $oldActivities,
        ]);
    }
}
