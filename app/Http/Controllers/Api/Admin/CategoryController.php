<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderByDesc('id')
            ->paginate(100);

        $data = [
            'categories' => $categories
        ];
        return response() -> json([
            'data' => $data,
            'message' => 'success',
            'status' => 200,
        ]);
    }
}
