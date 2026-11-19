<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\MarketProduct;
use App\Models\Opportunity;
use App\Models\Roadmap;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /* ================= STATS ================= */

    /** GET /api/stats */
    public function stats(): JsonResponse
    {
        return $this->ok([
            'courses' => Course::count(),
            'opportunities' => Opportunity::count(),
            'products' => MarketProduct::count(),
            'roadmaps' => Roadmap::where('is_published', true)->count(),
        ]);
    }

    /* ================= COURSES ================= */

    /** GET /api/courses?category=&search=&featured=1 */
    public function courses(Request $request): JsonResponse
    {
        $query = Course::orderBy('id');

        if ($request->filled('category')) {
            $query->where('category', $request->string('category'));
        }
        if ($request->filled('search')) {
            $q = $request->string('search');
            $query->where(fn ($w) => $w->where('title', 'like', "%{$q}%")
                ->orWhere('description', 'like', "%{$q}%")
                ->orWhere('instructor', 'like', "%{$q}%"));
        }
        if ($request->boolean('featured')) {
            $query->where('is_featured', true);
        }

        return $this->ok($query->get(), "Courses: {$query->count()}");
    }

    /** GET /api/courses/{id} */
    public function course(Course $course): JsonResponse
    {
        return $this->ok($course);
    }

    /** GET /api/categories — course categories */
    public function categories(): JsonResponse
    {
        return $this->ok(Course::select('category')->distinct()->orderBy('category')->pluck('category'));
    }

    /* ================= OPPORTUNITIES ================= */

    /** GET /api/opportunities?type=&search=&featured=1 */
    public function opportunities(Request $request): JsonResponse
    {
        $query = Opportunity::orderBy('id');

        if ($request->filled('type')) {
            $query->where('type', $request->string('type'));
        }
        if ($request->filled('search')) {
            $q = $request->string('search');
            $query->where(fn ($w) => $w->where('title', 'like', "%{$q}%")
                ->orWhere('organization', 'like', "%{$q}%")
                ->orWhere('description', 'like', "%{$q}%"));
        }
        if ($request->boolean('featured')) {
            $query->where('is_featured', true);
        }

        return $this->ok($query->get());
    }

    /** GET /api/opportunities/{id} */
    public function opportunity(Opportunity $opportunity): JsonResponse
    {
        return $this->ok($opportunity);
    }

    /** GET /api/opportunity-types */
    public function opportunityTypes(): JsonResponse
    {
        return $this->ok(Opportunity::select('type')->distinct()->orderBy('type')->pluck('type'));
    }

    /* ================= ROADMAPS ================= */

    /** GET /api/roadmaps — steps + progress ke saath */
    public function roadmaps(): JsonResponse
    {
        $roadmaps = Roadmap::where('is_published', true)
            ->orderBy('sort_order')->with('steps')->get()
            ->map(fn ($r) => $this->roadmapPayload($r));

        return $this->ok($roadmaps);
    }

    /** GET /api/roadmaps/{id} */
    public function roadmap(Roadmap $roadmap): JsonResponse
    {
        $roadmap->load('steps');

        return $this->ok($this->roadmapPayload($roadmap));
    }

    /* ================= PRODUCTS (Women's Hub) ================= */

    /** GET /api/products?category=&search= */
    public function products(Request $request): JsonResponse
    {
        $query = MarketProduct::orderBy('id');

        if ($request->filled('category')) {
            $query->where('category', $request->string('category'));
        }
        if ($request->filled('search')) {
            $q = $request->string('search');
            $query->where(fn ($w) => $w->where('title', 'like', "%{$q}%")
                ->orWhere('creator_name', 'like', "%{$q}%")
                ->orWhere('description', 'like', "%{$q}%"));
        }

        return $this->ok($query->get());
    }

    /** GET /api/products/{id} */
    public function product(MarketProduct $product): JsonResponse
    {
        return $this->ok($product);
    }

    /** POST /api/products — nayi listing publish (app ya website se) */
    public function storeProduct(Request $request): JsonResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'creator_name' => ['required', 'string', 'max:255'],
            'village' => ['nullable', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:100'],
            'price' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string', 'max:2000'],
            'contact' => ['nullable', 'string', 'max:255'],
        ]);

        $data += [
            'village' => $data['village'] ?? 'Phander Valley',
            'category' => $data['category'] ?? 'Handcrafted Textile',
            'price' => $data['price'] ?? 'Contact for price',
            'description' => $data['description'] ?? '',
            'contact' => $data['contact'] ?? '',
            'likes' => 0,
            'is_favorite' => false,
        ];

        $product = MarketProduct::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Published to Women\'s Hub.',
            'data' => $product,
        ], 201);
    }

    /** GET /api/product-categories */
    public function productCategories(): JsonResponse
    {
        return $this->ok(MarketProduct::select('category')->distinct()->orderBy('category')->pluck('category'));
    }

    /* ================= HELPERS ================= */

    private function ok($data, string $message = 'OK'): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ]);
    }

    private function roadmapPayload(Roadmap $roadmap): array
    {
        $steps = $roadmap->steps;

        return [
            'id' => $roadmap->id,
            'title' => $roadmap->title,
            'icon' => $roadmap->icon,
            'duration' => $roadmap->duration,
            'description' => $roadmap->description,
            'sort_order' => $roadmap->sort_order,
            'total_steps' => $steps->count(),
            'done_steps' => $steps->where('is_done', true)->count(),
            'progress_percent' => $roadmap->progressPercent(),
            'steps' => $steps,
        ];
    }
}
