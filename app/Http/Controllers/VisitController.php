<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\Pet;

class VisitController extends Controller
{
    public function index() {
        $visits = Visit::orderBy('created_at', 'desc')->paginate(100);;

        $view = view('visits/index', compact('visits'));
        return $view;
    }

    public function search(Request $request) {
        $visits = Visit::all();
        if(isset($request->date)) {
            $search = $request->date;
            $visits = Visit::where('created_at','LIKE', '%'.$search.'%')->orderBy('created_at', 'asc')->get();
        } 
        // else if (isset($request->name)) {
        //     $search = $request->name;
        //     $pet_ids = Pet::where('name', 'LIKE', '%'.$search.'%')->get('id'); 
        //     $visits = []; 
        //     foreach($pet_ids as $id) {
        //         $visits[] = Visit::where('pet_id', $id)->first();
        //     }
        // }
        $view = view('visits/index', compact('visits'));
        return $view;
    }

    public function show($id) {
        $visit = Visit::findOrFail($id);
        $view = view('visits/show', compact('visit'));
        return $view;
    }

    public function edit($id) {
        $visit = Visit::findOrFail($id);
        $view = view('visits/edit', compact('visit'));
        return $view;
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'description' => 'required'
        ]);
        $visit = Visit::findOrFail($id);
        $visit->description = $request->description;
        $visit->save();
        session()->flash('success_message', 'Success!');
        return redirect(action('VisitController@show', ['id' => $id]));
    }




}
