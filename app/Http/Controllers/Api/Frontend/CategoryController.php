<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Story;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory($slug)
    {
        $category_id = Category::select('id')->where('c_slug', $slug)->first();
        if(!$category_id) {
            return response()->json(
                [
                    'status' => 404,
                    'data' => null,
                    'message' => 'Category not found'
                ]
            , 404);
        }

        $stories = Story::where('c_parent_id', $category_id->id)->paginate(10);

        return response()->json(
            [
                'status' => 200,
                'data' => $stories,
                'message' => 'success'
            ]
        , 200);
    }
}
