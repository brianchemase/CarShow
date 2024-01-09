<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function home()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dash.home')->with($data);
    }


    public function table()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dash.table')->with($data);
    }

    public function form()
    {
        $contributions="";

        $data=[
            'contributions' => $contributions,
            

        ];

        return view('dash.forms')->with($data);
    }
}
