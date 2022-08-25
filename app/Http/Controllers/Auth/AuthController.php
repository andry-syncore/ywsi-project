<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
   public function index()
   {
      return view('auth.login');
   }

   public function authenticate(Request $request)
   {
      $messages = [
         'required' => Str::title(':attribute') . ' harus diisi.',
         'email' => Str::title(':attribute') . ' harus valid.'
      ];

      $credentials = $request->validate([
         'email' => ['required', 'email'],
         'password' => ['required'],
      ], $messages);

      if (Auth::attempt($credentials)) {
         $request->session()->regenerate();

         return redirect()->intended('dashboard');
      }

      return back()->with('error', 'Login gagal, mohon periksa kembali Email dan Password anda.');
   }

   public function logout(Request $request)
   {
      Auth::logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect('/');
   }
}
