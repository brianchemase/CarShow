<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    //show create form
    public function create(){
        return view('vehicles.create');
    }
}
