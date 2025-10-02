<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login', ['title' => 'Login']);
    }

    public function login(Request $request)
{
    // 1. Validasi input + captcha
    $request->validate([
        'email'    => 'required|email',
        'password' => 'required',
        'g-recaptcha-response' => 'required',
    ], [
        // Custom pesan error
        'g-recaptcha-response.required' => 'Silakan centang kotak reCAPTCHA',
    ]);

    // 2. Verifikasi ke Google reCAPTCHA
    $response = \Illuminate\Support\Facades\Http::asForm()->post(
        'https://www.google.com/recaptcha/api/siteverify',
        [
            'secret'   => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]
    );

    $body = $response->json();

    if (empty($body['success']) || $body['success'] !== true) {
        return back()->withErrors([
            'captcha' => 'Verifikasi reCAPTCHA gagal, silakan coba lagi.',
        ]);
    }

    // 3. Kalau captcha valid → lanjut login
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        
        if (Auth::user()->role === 'admin') {
            return redirect('/admin/posts');
        } elseif (Auth::user()->role === 'author') {
            return redirect('/');
        } else {
            return redirect('/');
        }

    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
