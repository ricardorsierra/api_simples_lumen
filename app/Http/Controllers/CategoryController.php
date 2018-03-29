<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return response()->json(Category::all());
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $course = Category::create($request->all());

        return response()->json($course, 201);
    }
}