<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required',]
        ]);

        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
            return back()->withErrors([
                'email' => 'Email dan password salah'
            ]);
        } catch (Exception $e) {
            Log::error('Error while login' . $e->getMessage());
            return back()->withErrors('error', 'Gangguan Sistem!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        return redirect('/auth/login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'phone' => ['nullable', 'string']
        ]);

        try {
            User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'role' => 'user'
            ]);

            // if($request->expectsJson()){
            //     return response()->json([
            //         'status'=>'success',
            //         'message'=>'Successfully registered!'
            //     ]. 200);
            // }
            return back()->with('success', 'Successfully registered!');
        } catch (Exception $e) {
            Log::error('Error saat registrasi user' . $e->getMessage());

            if ($e->getCode() == 23000) {
                return back()->with('error', 'Username or email already exists!');
                // echo $e->getTrace();
            } else {
                return back()->with('error', 'Maaf kesalahan sistem');
            }
        }
    }
}
