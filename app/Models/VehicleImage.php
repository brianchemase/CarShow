<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleImage extends Model
{

    protected $fillable = [
        'vehicle_id',
        'filename',
    ];

    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class);
    }
    use HasFactory;
}
