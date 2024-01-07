<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class DropzoneController extends Controller
{
    //
    // To render html form upload
    public function index()
    {
        $motorid=rand(1,9999);
        Session::put('motorid', $motorid);
        return view('index');
    }

    // To upload file from client to server
    public function store(Request $request)
    {
       // $motorid="20231425556";// needs to come from a session
        $motorid = Session::get('motorid');


        $image = $request->file('file');
        $imageName = time().rand(1,99).'.'.$image->extension();
        $image->move(public_path('moti_images'),$imageName);

        // Save data to the database
         DB::table('tbl_images_uploaded')->insert([
        'motorid' => $motorid,
        'image_name' => $imageName,
        'created_at' => now(), // You can adjust this based on your needs
        'updated_at' => now(),
    ]);

        return response()->json(['success'=>$imageName]);
    }
}
