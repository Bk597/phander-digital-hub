<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 * auth.token — API authentication.
 * Header:  Authorization: Bearer <api_token>
 * Ya:      ?token=<api_token>
 * Website ka session login bhi chalta hai (browser fetch ke liye).
 */
class EnsureApiToken
{
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken() ?: $request->query('token');

        if ($token) {
            $user = User::where('api_token', $token)->first();
            if ($user) {
                Auth::login($user); // is request ke liye authenticate
            }
        }

        if (! Auth::check()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthenticated. Send "Authorization: Bearer <token>" (login se token milega) ya ?token= use karein.',
            ], 401);
        }

        return $next($request);
    }
}
