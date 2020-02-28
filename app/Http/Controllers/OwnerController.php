<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
    public function index(){
        $owners = Owner::orderBy('surname', 'asc')->skip(0)->take(10)->get();
        return view('/owners/index',compact('owners'));
    }

    public function search(Request $request){
        $search = $request->input('name');
        $owners = Owner::where('surname','LIKE', '%'.$search.'%')->orderBy('surname', 'asc')->get();
        return view('/owners/index',compact('owners'));
    }

    public function create(){
        return view('/owners/create');
    }

    public function store(Request $request){
        $firstname = $request->input('firstname');
        $surname = $request->input('surname');

        $owner = new Owner;
        $owner->first_name = $firstname;
        $owner->surname = $surname;
        $owner->save();
        return redirect(action('OwnerController@index'));
    }
    public function delete(Request $request){
        // return $request->input('ownerid');
        $owner = Owner::findOrFail($request->input('ownerid'));
        $owner->delete();
        return redirect(action('OwnerController@index'));
    }
}
