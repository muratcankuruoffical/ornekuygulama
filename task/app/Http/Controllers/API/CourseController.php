<?php

namespace App\Http\Controllers\API;

use App\Campus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    //
    public function addCourse(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $course = Campus::find($id)->courses()->create([
           'name' => $request->input('name'),
           'price' => $request->input('price'),
        ]);

        //$course_type_id = $request->input('course_type_id');
        $course->coursetypes()->attach(1);

        return response()->json(['message' => 'Course Successfully Created','course' => $course], 201);
    }

}
