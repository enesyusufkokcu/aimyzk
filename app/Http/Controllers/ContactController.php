<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // VALIDATION
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        try {
            // MAİL GÖNDER
            Mail::raw("İsim Soyisim: {$validated['name']}\n" . "E-Posta: {$validated['email']}\n" . "Telefon: {$validated['phone_number']}\n", function ($message) use ($validated) {
                $message->to('enesyusufkokcu@gmail.com')->subject('İletişim Formu Mesajı');
            });

            return back()->with('success', 'Başarıyla gönderildi!');
        } catch (\Throwable $th) {
            return back()->with('error', 'Bir Hata oluştu! Lütfen daha sonra tekrar deneyiniz.');
        }
    }
}
