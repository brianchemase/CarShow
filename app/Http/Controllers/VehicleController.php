<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleImage;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isTrue;
use function Termwind\style;

class VehicleController extends Controller
{
    //show create form
    public function create()
    {
        return view('vehicles.create');
    }

    //store data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'manufacturer' => 'required',
            'model' => 'required',
            'yom' => 'required',
            'engine_capacity' => 'required',
            'fuel_type' => 'required',
            'transmission' => 'required',
            'body_style' => 'required',
            'car_condition' => 'required',
            'seats' => 'required',
            'mileage' => 'required',
            'images.*' => ['nullable', 'mimes:jpg,jpeg,png'],
            'price' => 'required'
        ]);

        //set the ad to be available by default
        $formFields['availability'] = '1';

        //dd($formFields);

        $formFieldData = Vehicle::create($formFields);

        // Handle Dropzone file uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time().rand(1,99).'.'.$image->extension();
                $image->move(public_path('moti_images'),$filename);

                // Create image record
                VehicleImage::create([
                    'vehicle_id'=> $formFieldData['id'],
                    'filename' => $filename]
                );
            }
        }
    }
}
