<?php

namespace App\Http\Controllers\Dev\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory($slug)
    {
        return view('frontend.category', ['slug' => $slug]);
    }
}
