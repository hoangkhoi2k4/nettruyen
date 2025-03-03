<?php

namespace App\Http\Controllers\Dev\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Story;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $storyNew = Story::orderBy('id', 'desc')
            ->limit(12)->get();

        foreach ($storyNew as $story) {
            $chapter = Chapter::select('id', 'c_name', 'c_story_id', 'c_slug')
                ->where('c_story_id', $story->id)
                ->first(); 
            $story->chapter = $chapter;
        }

        $storyHot = Story::orderBy('s_view', 'desc')
            ->limit(3)->get();

        $storyFull = Story::where('s_status', 1)
            ->limit(7)->get();

        $storyNewUpdate = Story::orderBy('updated_at', 'desc')
            ->limit(15)->get();

        foreach ($storyNewUpdate as $story) {
            $chapter = Chapter::select('id', 'c_name', 'c_story_id', 'c_slug')
                ->where('c_story_id', $story->id)
                ->first(); // Lấy bản ghi đầu tiên
            
            $story->chapter = $chapter;
        }

        $storyRating = Story::where('vote_number', 5)
            ->limit(10)->get();

        $storyView = Story::orderBy('s_view', 'desc')
            ->limit(10)->get();

        $storyInterest = Story::inRandomOrder()
            ->limit(10)->get();

        $data = [
            'storyNew' => $storyNew,
            'storyHot' => $storyHot,
            'storyFull' => $storyFull,
            'storyNewUpdate' => $storyNewUpdate,
            'storyRating' => $storyRating,
            'storyView' => $storyView,
            'storyInterest' => $storyInterest,
        ];
        return view('frontend.home', ['data' => $data]);
    }
}
