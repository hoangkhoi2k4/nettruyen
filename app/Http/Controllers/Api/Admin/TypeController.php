<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::orderByDesc('id')
            ->paginate(100);

        $viewData = [
            'types' => $types
        ];
        return view('admin.type.index', $viewData);
    }
}
