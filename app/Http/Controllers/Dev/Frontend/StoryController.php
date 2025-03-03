<?php

namespace App\Http\Controllers\Dev\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function getStory($slug)
    {
        return view('frontend.page', ['slug' => $slug]);
    }
}
