<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    //
    public function DisplayLanding()
    {
        

        $data=[
            
        ];

        return view ('landing')->with($data);
    }
}
