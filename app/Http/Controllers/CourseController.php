<?php

namespace App\Http\Controllers;

use App\Model\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        return response()->json(Course::all());
    }

    public function show($id)
    {
        return response()->json(Course::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'capacity' => 'required',
            'location' => 'required|alpha'
        ]);
        $course = Course::create($request->all());

        return response()->json($course, 201);
    }
}