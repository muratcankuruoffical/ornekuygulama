<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SchoolController extends Controller
{
    //
    public function addSchool(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'logo' => 'required|image|mimes:jpeg,png,jpg|dimensions:max_width=100,max_height=100'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $logoName = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('images'), $logoName);
        $school = School::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'logo' => $logoName,
        ]);
        return response()->json(['message' => 'School Successfully Created.', 'school' => $school], 401);
    }
}
