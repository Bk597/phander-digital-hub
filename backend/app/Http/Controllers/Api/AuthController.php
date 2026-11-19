<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /** POST /api/auth/register — naya account + token */
    public function register(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['nullable', 'string', 'max:30'],
            'location' => ['nullable', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'goal' => ['nullable', 'string', 'max:255'],
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['api_token'] = Str::random(64);

        $user = User::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Account created successfully.',
            'data' => [
                'token' => $user->api_token,
                'user' => $this->userPayload($user),
            ],
        ], 201);
    }

    /** POST /api/auth/login — email + password se token */
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return response()->json([
                'success' => false,
                'message' => 'The provided credentials do not match our records.',
            ], 401);
        }

        /** @var User $user */
        $user = Auth::user();
        $user->api_token = Str::random(64);
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Logged in.',
            'data' => [
                'token' => $user->api_token,
                'user' => $this->userPayload($user),
            ],
        ]);
    }

    /** POST /api/auth/logout — token cancel */
    public function logout(Request $request): JsonResponse
    {
        /** @var User $user */
        $user = $request->user();
        $user->api_token = null;
        $user->save();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([
            'success' => true,
            'message' => 'Logged out.',
        ]);
    }

    /** GET /api/auth/me — current user */
    public function me(Request $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => ['user' => $this->userPayload($request->user())],
        ]);
    }

    /** GET /api/dashboard — enrolled courses, roadmaps, saved opportunities */
    public function dashboard(Request $request): JsonResponse
    {
        $user = $request->user();

        $courses = \App\Models\Course::orderBy('id')->get();
        $roadmaps = \App\Models\Roadmap::where('is_published', true)->with('steps')->get();
        $saved = \App\Models\Opportunity::where('is_saved', true)->orderBy('id')->get();

        return response()->json([
            'success' => true,
            'data' => [
                'user' => $this->userPayload($user),
                'stats' => [
                    'enrolled_courses' => $courses->where('is_enrolled', true)->count(),
                    'saved_opportunities' => $saved->count(),
                    'market_products' => \App\Models\MarketProduct::count(),
                ],
                'enrolled_courses' => $courses->where('is_enrolled', true)->values(),
                'courses' => $courses,
                'roadmaps' => $roadmaps->map(fn ($r) => [
                    'id' => $r->id,
                    'title' => $r->title,
                    'icon' => $r->icon,
                    'duration' => $r->duration,
                    'description' => $r->description,
                    'total_steps' => $r->steps->count(),
                    'done_steps' => $r->steps->where('is_done', true)->count(),
                    'progress_percent' => $r->progressPercent(),
                    'steps' => $r->steps,
                ]),
                'saved_opportunities' => $saved,
            ],
        ]);
    }

    /** User ke liye safe payload */
    private function userPayload(User $user): array
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'created_at' => $user->created_at,
        ];
    }
}
