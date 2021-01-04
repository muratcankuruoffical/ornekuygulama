<?php

namespace App\Http\Controllers\API;

use App\Campus;
use App\Http\Controllers\Controller;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class CampusController extends Controller
{
    public function addCampus(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|max:250'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $school = School::find($id);

        $campus = $school->campuses()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address')
        ]);

        $details = [
            'title' => $school->name. ' okulunuza ait '. $campus->name .' Kampüsü sistemimize eklenmiştir.',
            'body' => $school->name. ' okulunuza ait '. $campus->name .' Kampüsü sistemimize eklenmiştir.'
        ];

        Mail::to($school->email)->send(new \App\Mail\Mail($details));

        return response()->json(['message' => 'Campus Successfully Created','campus' => $campus], 201);
    }
}
