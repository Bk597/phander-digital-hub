<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /** Show login page */
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return view('pages.login');
    }

    /** Handle login */
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        $request->session()->regenerate();

        return response()->json([
            'message' => 'Logged in.',
            'redirect' => '/dashboard',
        ]);
    }

    /** Show registration page */
    public function showRegister()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return view('pages.register');
    }

    /** Handle registration */
    public function register(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['nullable', 'string', 'max:30'],
            'location' => ['nullable', 'string', 'max:255'],
            'goal' => ['nullable', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user, remember: true);
        $request->session()->regenerate();

        return response()->json([
            'message' => 'Account created.',
            'redirect' => '/dashboard',
        ]);
    }

    /** Handle logout */
    public function logout(Request $request): JsonResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Logged out.']);
    }

    /** Current user for frontend AJAX (dashboard header etc.) */
    public function me(Request $request): JsonResponse
    {
        $user = $request->user();

        return response()->json($user ? [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ] : []);
    }
}
