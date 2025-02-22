<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $storyNew = Story::orderBy('id', 'desc')
                            ->limit(12)->get();

        $storyHot = Story::orderBy('s_view', 'desc')
                            ->limit(7)->get();

        $storyFull = Story::where('s_status', 1)
                            ->limit(7)->get();

        $storyNewUpdate = Story::orderBy('updated_at', 'desc')
                            ->limit(15)->get();

        $storyRating = Story::where('vote_number', 5)
                            ->limit(10)->get();

        $storyView = Story::orderBy('s_view', 'desc')
                            ->limit(10)->get();

        $storyInterest = Story::inRandomOrder()
                            ->limit(10)->get();

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
