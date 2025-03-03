<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function getStory($slug)
    {
        $story = Story::where('s_slug', $slug)
                ->first();

        if (!$story) {
            return response()->json([
                'status' => 404,
                'message' => 'Story not found'
            ], 404);
        }

        $chapters = Chapter::select('id', 'c_name', 'c_slug')->where('c_story_id', $story->id)
                ->orderBy('id', 'asc')
                ->get();

        $chapters = $chapters ?? [];
        $story->chapters = $chapters;

        return response()->json([
            'status' => 200,
            'data' => $story,
            'message' => 'success'
        ], 200);
    }
}
