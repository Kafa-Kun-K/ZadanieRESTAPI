<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index(){
        $fpeople = People::all();
        return view('people/index', ['fpeople' => $fpeople]);
        
    }

    public function create(){
        return view('people/create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phonenumber' => 'required',
            'street' => 'required',
            'city' => 'required'
        ]);

        $newPeople = People::create($data);

        return redirect(route('people.index'));

    }

    public function edit(People $people){
        return view('people/edit', ['people' => $people]);
    }

    public function update(People $people, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phonenumber' => 'required',
            'street' => 'required',
            'city' => 'required'
        ]);

        $people->update($data);

        return redirect(route('people.index'))->with('success', 'People Updated Succesffully');

    }

    public function destroy(People $people){
        $people->delete();
        return redirect(route('people.index'))->with('success', 'People deleted Succesffully');
    }
}