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

    // Update

    function showmodel($id){
        $model=VehicleModel::with('vehicletypes')->find($id);
        $vtid=$model->vehicle_type_id;
        $brandVehicleType=VehicleType::where('id',$vtid)->with('brands')->get();
        foreach($brandVehicleType as $info){
            $brand=$info->brands->brand_name;
        }
        $type=VehicleType::with('brands')->get();
        return view('amber.updatemodel',compact(['model','brand','type']));
    }

    function udmodel(Request $req){
        // dd($req->driverside);

        VehicleModel::find($req->id)->update([
            'model_name'=>$req->model_name,
            'year'=>$req->year,
            'color'=>$req->color,
            'condition'=>$req->condition,
            'milage'=>$req->milage,
            'capacity'=>$req->capacity,
            'driverside'=>$req->driverside,
            'trans_type'=>$req->trans_type,
            'vehicle_type_id'=>$req->vehicle_type_id
        ]);
        return redirect()->back();
    }
    //type
    function showtype($id){
        $type=VehicleType::with('brands')->find($id);
        $brands=Brand::all();
                // dd($type);
        return view('amber.updatetype',compact(['type','brands']));
    }
    function udtype(Request $req){
        
        VehicleType::find($req->id)->update([
            'vehicle_type_name'=>$req->type,
            'Active'=>$req->status,
            'brand_id'=>$req->brand_id
        ]);
        return redirect()->back();
    }
    function showbrand($id){
        $brand=Brand::find($id);
        return view('amber.updatebrand',compact(['brand']));
    }
    function udbrand(Request $req){

        Brand::find($req->id)->update([
            'brand_name'=>$req->brand,
            'Active'=>$req->status,
            'desc'=>$req->desc
        ]);
        return redirect()->back();
    }
}
