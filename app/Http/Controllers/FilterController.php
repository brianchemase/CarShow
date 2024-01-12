<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    //
    public function search(Request $request)
    {
        // Get all request parameters
        $params = $request->all();
        

        

        //return $params;

        // Remove any parameters with empty values
        $params = array_filter($params);
        $vehicles=$params;
        return view('vehicle.index', compact('vehicles'));

        // Start building the query
        $query = DB::table('vehicle_information');

        // Add filters based on request parameters
        foreach ($params as $key => $value) {
            // You may want to add validation or further processing for each parameter
            $query->where($key, 'like', '%' . $value . '%');
        }

        // Get the filtered results
        $vehicles = $query->get();

        
    }
}
