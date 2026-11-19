<?php

use App\Http\Controllers\Api;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/* ---------- Public pages ---------- */
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/skills', [PageController::class, 'skills'])->name('skills');
Route::get('/opportunities', [PageController::class, 'opportunities'])->name('opportunities');
Route::get('/apply', function () {
    return view('pages.apply');
})->name('apply');
Route::get('/roadmaps', [PageController::class, 'roadmaps'])->name('roadmaps');
Route::get('/womens-hub', [PageController::class, 'womensHub'])->name('womens-hub');
Route::get('/career-ai', [PageController::class, 'careerAi'])->name('career-ai');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

/* ---------- Forms ---------- */
Route::post('/contact', [FormController::class, 'storeContact'])->name('contact.store');
Route::post('/newsletter', [FormController::class, 'subscribe'])->name('newsletter.subscribe');

/* ---------- Auth ---------- */
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/api/me', [AuthController::class, 'me'])->name('me');

/* ---------- Protected ---------- */
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
});

/* =========================================================
 * REST API  (JSON)  —  /api/*
 * Public: data endpoints + contact/newsletter
 * Auth:   Bearer <api_token> (login/register se token milta hai)
 * ========================================================= */
Route::prefix('api')->group(function () {

    /* ----- Public data ----- */
    Route::get('/stats', [Api\ContentController::class, 'stats']);
    Route::get('/categories', [Api\ContentController::class, 'categories']);
    Route::get('/opportunity-types', [Api\ContentController::class, 'opportunityTypes']);
    Route::get('/product-categories', [Api\ContentController::class, 'productCategories']);

    Route::get('/courses', [Api\ContentController::class, 'courses']);
    Route::get('/courses/{course}', [Api\ContentController::class, 'course']);
    Route::get('/opportunities', [Api\ContentController::class, 'opportunities']);
    Route::get('/opportunities/{opportunity}', [Api\ContentController::class, 'opportunity']);
    Route::get('/roadmaps', [Api\ContentController::class, 'roadmaps']);
    Route::get('/roadmaps/{roadmap}', [Api\ContentController::class, 'roadmap']);
    Route::get('/products', [Api\ContentController::class, 'products']);
    Route::post('/products', [Api\ContentController::class, 'storeProduct']);
    Route::get('/products/{product}', [Api\ContentController::class, 'product']);

    /* ----- Public forms ----- */
    Route::post('/contact', [Api\FormController::class, 'contact']);
    Route::post('/newsletter', [Api\FormController::class, 'newsletter']);

    /* ----- Auth ----- */
    Route::post('/auth/register', [Api\AuthController::class, 'register']);
    Route::post('/auth/login', [Api\AuthController::class, 'login']);

    /* ----- Protected (token required) ----- */
    Route::middleware('auth.token')->group(function () {
        Route::get('/auth/me', [Api\AuthController::class, 'me']);
        Route::post('/auth/logout', [Api\AuthController::class, 'logout']);
        Route::get('/dashboard', [Api\AuthController::class, 'dashboard']);

        Route::post('/courses/{course}/enroll', [Api\InteractionController::class, 'enroll']);
        Route::post('/opportunities/{opportunity}/save', [Api\InteractionController::class, 'save']);
        Route::post('/products/{product}/like', [Api\InteractionController::class, 'like']);
        Route::patch('/roadmaps/{roadmap}/steps/{step}', [Api\InteractionController::class, 'milestone']);
    });
});
