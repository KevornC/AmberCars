<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_name',
        'year',
        'color',
        'condition',
        'milage',
        'capacity',
        'driverside',
        'trans_type',
        'vehicle_type_id',
        'Active'
    ];

    function vehicletypes(){
        return $this->belongsTo(VehicleType::class,'vehicle_type_id');
    }
}
