<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
      public function showLoginForm()
    {
        return view('auth.login');
    }

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Evaluar si está bloqueado o inactivo
        if (! $user->is_active) {
            Auth::logout();
            return back()->withErrors([
                'email' => 'Tu cuenta está inactiva. Contacta al administrador.',
            ]);
        }

        if ($user->is_blocked) {
            Auth::logout();
            return back()->withErrors([
                'email' => 'Tu cuenta está bloqueada.',
            ]);
        }

        // Actualizar último login
        $user->last_login_at = now();
        $user->save();

       return redirect()->intended('/posts');
    }

    return back()->withErrors([
        'email' => 'Credenciales incorrectas.',
    ]);
}


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

          return redirect()->intended('/posts');
    }
}
