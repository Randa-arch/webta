<?php
/*namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Metode untuk logout pengguna
    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect ke halaman login
        return redirect()->route('login');
    }
}
