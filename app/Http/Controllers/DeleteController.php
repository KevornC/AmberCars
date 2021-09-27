<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\VehicleType;
use App\Models\VehicleModel;


class DeleteController extends Controller
{
    function dmodel($id){
        VehicleModel::destroy(1);
        return redirect()->back();
    }
    function dtype($id){
        VehicleType::find($id)->update(['Active'=>'Not Active']);
        return redirect()->back();
    }
    function dbrand($id){
        Brand::find($id)->update(['Active'=>'Not Active']);
        return redirect()->back();
    }
    function udtype($id){
        VehicleType::find($id)->update(['Active'=>'Active']);
        return redirect()->back();
    }
    function udbrand($id){
        Brand::find($id)->update(['Active'=>'Active']);
        return redirect()->back();
    }
}
