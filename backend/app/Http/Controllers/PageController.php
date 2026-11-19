<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\MarketProduct;
use App\Models\Opportunity;
use App\Models\Roadmap;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /** Landing page */
    public function index()
    {
        return view('pages.home', [
            'featuredCourses' => Course::where('is_featured', true)->get(),
            'featuredOpportunities' => Opportunity::where('is_featured', true)->get(),
            'stats' => [
                'courses' => Course::count(),
                'opportunities' => Opportunity::count(),
                'products' => MarketProduct::count(),
                'roadmaps' => Roadmap::where('is_published', true)->count(),
            ],
        ]);
    }

    /** Skills Academy */
    public function skills()
    {
        return view('pages.skills', [
            'courses' => Course::orderBy('id')->get(),
            'categories' => Course::select('category')->distinct()->orderBy('category')->pluck('category'),
        ]);
    }

    /** Scholarships / Jobs / Grants */
    public function opportunities()
    {
        return view('pages.opportunities', [
            'opportunities' => Opportunity::orderBy('id')->get(),
            'types' => Opportunity::select('type')->distinct()->orderBy('type')->pluck('type'),
        ]);
    }

    /** Roadmaps */
    public function roadmaps()
    {
        return view('pages.roadmaps', [
            'roadmaps' => Roadmap::where('is_published', true)
                ->with('steps')
                ->orderBy('sort_order')
                ->get(),
        ]);
    }

    /** Women's Hub marketplace */
    public function womensHub()
    {
        return view('pages.womens_hub', [
            'products' => MarketProduct::orderBy('id')->get(),
            'categories' => MarketProduct::select('category')->distinct()->orderBy('category')->pluck('category'),
        ]);
    }

    /** Career AI demo page */
    public function careerAi()
    {
        return view('pages.career_ai');
    }

    /** About page */
    public function about()
    {
        return view('pages.about');
    }

    /** Contact page (form posts to /contact) */
    public function contact()
    {
        return view('pages.contact');
    }

    /** Dashboard (protected) */
    public function dashboard(Request $request)
    {
        $user = $request->user();
        if (! $user) {
            return redirect('/login');
        }

        return view('pages.dashboard', [
            'user' => $user,
            'courses' => Course::where('is_enrolled', true)->get(),
            'roadmaps' => Roadmap::where('is_published', true)->with('steps')->orderBy('sort_order')->get(),
            'savedOpportunities' => Opportunity::where('is_saved', true)->get(),
            'products' => MarketProduct::count(),
        ]);
    }
}
