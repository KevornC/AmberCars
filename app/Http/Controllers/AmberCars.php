<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\VehicleType;
use App\Models\VehicleModel;


class AmberCars extends Controller
{
    function addbrand(Request $req){
        $this->validate($req,[
            'brand'=>'required | unique:brands,brand_name',
            'desc'=>'required'
        ]);

            Brand::create([
                'brand_name'=>$req->brand,
                'desc'=>$req->desc
            ]);

        return redirect()->back();
    }

    function viewtype(){
        $brand=Brand::all();
        return view('amber.types',compact('brand'));
    }

    function addtype(Request $req){
        $this->validate($req,[
            'type'=>'required',
            'brand_id'=>'required'
        ]);

            VehicleType::create([
                'vehicle_type_name'=>$req->type,
                'brand_id'=>$req->brand_id
            ]);

        return redirect()->back();
    }

    function viewmodel(){
        $types=VehicleType::with('brands')->get();
        return view('amber.models',compact('types'));
    }

    function addmodel(Request $req){
        $this->validate($req,[
            'model_name'=>'required',
            'year'=>'required',
            'color'=>'required',
            'condition'=>'required',
            'milage'=>'required',
            'capacity'=>'required',
            'driverside'=>'required',
            'trans_type'=>'required',
            'vehicle_type_id'=>'required'
        ]);

            VehicleModel::create([
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

    function view(){
        $models=VehicleModel::with('vehicletypes')->get();

        return view('amber.view',compact(['models']));
    }
    function viewtypes(){
        $types=VehicleType::where('Active','Active')->with('brands')->get();

        return view('amber.viewtypes',compact(['types']));
    }
    function viewbrands(){
        $brands=Brand::where('Active','Active')->get();

        return view('amber.viewbrands',compact(['brands']));
    }
}
