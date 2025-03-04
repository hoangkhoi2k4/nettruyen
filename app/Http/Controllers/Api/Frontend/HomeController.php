<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $storyNew = Cache::remember('storyNew', 60, function () {
            return Story::with('chapters')
                ->select('id', 's_slug', 's_name', 's_avatar', 's_total_chapter', 'vote_number', 'category_name', 's_view')
                ->orderBy('id', 'desc')
                ->limit(12)
                ->get();
        });

        $storyHot = Cache::remember('storyHot', 60, function () {
            return Story::select('id', 's_slug', 's_name', 's_avatar', 's_total_chapter', 'vote_number', 'category_name', 's_view')
                ->orderBy('s_view', 'desc')
                ->limit(7)
                ->get();
        });

        $storyFull = Cache::remember('storyFull', 60, function () {
            return Story::select('id', 's_slug', 's_name', 's_avatar', 's_total_chapter', 'vote_number', 'category_name', 's_view')
                ->where('s_status', 1)
                ->limit(7)
                ->get();
        });

        $storyNewUpdate = Cache::remember('storyNewUpdate', 60, function () {
            return Story::select('id', 's_slug', 's_name', 's_avatar', 's_total_chapter', 'vote_number', 'category_name', 's_view')
                ->orderBy('updated_at', 'desc')
                ->limit(15)
                ->get();
        });

        $storyRating = Cache::remember('storyRating', 60, function () {
            return Story::select('id', 's_slug', 's_name', 's_avatar', 's_total_chapter', 'vote_number', 'category_name', 's_view')
                ->where('vote_number', 5)
                ->limit(10)
                ->get();
        });

        $storyView = Cache::remember('storyView', 60, function () {
            return Story::select('id', 's_slug', 's_name', 's_avatar', 's_total_chapter', 'vote_number', 'category_name', 's_view')
                ->orderBy('s_view', 'desc')
                ->limit(10)
                ->get();
        });

        $storyInterest = Cache::remember('storyInterest', 60, function () {
            return Story::select('id', 's_slug', 's_name', 's_avatar', 's_total_chapter', 'vote_number', 'category_name', 's_view')
                ->inRandomOrder()
                ->limit(10)
                ->get();
        });

        return response()->json([
            'storyNew' => $storyNew,
            'storyHot' => $storyHot,
            'storyFull' => $storyFull,
            'storyNewUpdate' => $storyNewUpdate,
            'storyRating' => $storyRating,
            'storyView' => $storyView,
            'storyInterest' => $storyInterest,
            'message' => 'success',
            'status' => 200,
        ], 200);
    }
}
