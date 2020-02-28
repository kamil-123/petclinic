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
        $search = $request->input('')
    }
}
