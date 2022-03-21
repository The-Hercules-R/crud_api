<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceColletion;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function show(Person $person)
    {
        return new PersonResource($person);
    }

    public function index()
    {
        return new PersonResourceColletion(Person::paginate());
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'city' => 'required',
        ]);
        $person = Person::create($request->all());
        return new PersonResource($person);
    }
}
