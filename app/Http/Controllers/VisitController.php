<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;

class VisitController extends Controller
{
    public function index() {
        $visits = Pet::orderBy('name', 'asc')->paginate(100);;

        $view = view('pets/index', compact('pets'));
        return $view;
    }

}
