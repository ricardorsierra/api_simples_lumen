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
            'email' => 'required|email|unique:users',
            'location' => 'required|alpha'
        ]);
        $course = Course::create($request->all());

        return response()->json($course, 201);
    }

    public function update($id, Request $request)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());

        return response()->json($course, 200);
    }

    public function delete($id)
    {
        Course::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}