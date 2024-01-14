<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function create(Request $request)
    {
        $people=new People();
        $people->name=$request->name;
        $people->surname=$request->surname;
        $people->phonenumber=$request->phonenumber;
        $people->street=$request->street;
        $people->city=$request->city;

        $people->save();

        return response()->json('Added succesfully');
    }

    public function update(Request $request)
    {
        $people=People::findorfail($request->id);
        $people->name=$request->name;
        $people->surname=$request->surname;
        $people->phonenumber=$request->phonenumber;
        $people->street=$request->street;
        $people->city=$request->city;

        $people->update();

        return response()->json('Updated succesfully');
    }

    public function delete(Request $request)
    {
        $people=People::findorfail($request->id)->delete();

        return response()->json('Deleted succesfully');
    }

    public function read(Request $request)
    {
        $people = People::findorfail($request->id);

        return response()->json($people);
    }

    public function readall()
    {
        $people=People::all();

        return response()->json($people);
    }
}