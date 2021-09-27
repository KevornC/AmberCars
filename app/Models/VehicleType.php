<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_type_name',
        'brand_id',
        'Active'
    ];

    function brands(){
        return $this->belongsTo(Brand::class,'brand_id');
    }

    function vehiclemodels(){
        return $this->hasMany(VehicleModel::class,'vehicle_type_id');
    }
}
