<?php

namespace App\Http\Controllers\API;

use App\CourseType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseTypeController extends Controller
{
    //
    public function addCourseType(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $courseType = CourseType::create([
           'name' => $request->input('name'),
        ]);
        return response()->json(['message' => 'Course Type Successfully Created', 'courseType' => $courseType], 401);
    }
}
