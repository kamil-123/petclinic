<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class PetController extends Controller
{
    public function index() {
        $pets = Pet::orderBy('name', 'asc')->paginate(100);;

        $view = view('pets/index', compact('pets'));
        return $view;
    }

    public function search(Request $request) {
        $search = $request->search;
        $pets = Pet::where('name','LIKE', '%'.$search.'%')->orderBy('name', 'asc')->get();
        $view = view('pets/index', compact('pets'));
        return $view;
    }

    public function show($id) {
        $pet = Pet::findOrFail($id);
        $view = view('pets/show', compact('pet'));
        return $view;
    }

    public function edit($id) {
        $pet = Pet::findOrFail($id);
        $view = view('pets/edit', compact('pet'));
        return $view;
    }

    public function update(Request $request, $id = null) {
        $this->validate($request, [
            'name' => 'required',
            'breed' => 'required',
            'weight' => 'required',
            'age' => 'required',
            'photo' => 'required'
        ]);
        $pet = Pet::findOrFail($id);
        $pet->name = $request->name;
        $pet->breed = $request->breed;
        $pet->weight = $request->weight;
        $pet->age = $request->age;
        $pet->photo = $request->photo;
        $pet->save();
        session()->flash('success_message', 'Success!');
        return redirect(action('PetController@show', ['id' => $id]));
    }

}
