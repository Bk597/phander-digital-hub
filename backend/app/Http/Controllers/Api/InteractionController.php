<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\MarketProduct;
use App\Models\Opportunity;
use App\Models\Roadmap;
use App\Models\RoadmapStep;
use Illuminate\Http\JsonResponse;

/**
 * Auth-token wale demo interactions (website ki tarah):
 * enroll, save, like, milestone tick.
 */
class InteractionController extends Controller
{
    /** POST /api/courses/{id}/enroll — course me enroll (demo) */
    public function enroll(Course $course): JsonResponse
    {
        if (! $course->is_enrolled) {
            $course->update(['is_enrolled' => true, 'progress' => 0]);
        }

        return response()->json([
            'success' => true,
            'message' => "Enrolled in \"{$course->title}\".",
            'data' => $course->fresh(),
        ]);
    }

    /** POST /api/opportunities/{id}/save — save/unsave toggle */
    public function save(Opportunity $opportunity): JsonResponse
    {
        $opportunity->update(['is_saved' => ! $opportunity->is_saved]);

        return response()->json([
            'success' => true,
            'message' => $opportunity->is_saved ? 'Opportunity saved.' : 'Removed from saved.',
            'data' => $opportunity,
        ]);
    }

    /** POST /api/products/{id}/like — like/unlike toggle */
    public function like(MarketProduct $product): JsonResponse
    {
        if ($product->is_favorite) {
            $product->update(['is_favorite' => false, 'likes' => max(0, $product->likes - 1)]);
            $message = 'Like removed.';
        } else {
            $product->update(['is_favorite' => true, 'likes' => $product->likes + 1]);
            $message = 'Product liked.';
        }

        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $product,
        ]);
    }

    /** PATCH /api/roadmaps/{roadmap}/steps/{step} — milestone tick/un-tick */
    public function milestone(Roadmap $roadmap, RoadmapStep $step): JsonResponse
    {
        abort_if($step->roadmap_id !== $roadmap->id, 404, 'Step does not belong to this roadmap.');

        $step->update(['is_done' => ! $step->is_done]);
        $roadmap->load('steps');

        return response()->json([
            'success' => true,
            'message' => $step->is_done ? "Milestone \"{$step->title}\" completed." : "Milestone \"{$step->title}\" reopened.",
            'data' => [
                'step' => $step,
                'roadmap_progress' => [
                    'total_steps' => $roadmap->steps->count(),
                    'done_steps' => $roadmap->steps->where('is_done', true)->count(),
                    'progress_percent' => $roadmap->progressPercent(),
                ],
            ],
        ]);
    }
}
