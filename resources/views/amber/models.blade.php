@extends('layouts.nav')

@section('content')
<div style="margin-top:100px">
<h1>Add Models</h1>
<form action="/addmodel" method="post">
    @csrf
<input type="text" name="model_name" placeholder="Enter Model Name"><br>
<input type="date" name="year"><br>
<input type="text" name="color" placeholder="Enter Color"><br>
<input type="text" name="condition" placeholder="Enter Condition"><br>
<input type="text" name="milage" placeholder="Enter Milage"><br>
<input type="text" name="capacity" placeholder="Enter Capacity"><br>
<select name="driverside">
    <option value="">Select Driver Side</option>
    <option value="Left">Left</option>
    <option value="Right">Right</option>
</select>
<select name="trans_type">
    <option value="">Transmission Type</option>
    <option value="AutoMatic">Automatic</option>
    <option value="Manual">Manual</option>
</select>
<select name="vehicle_type_id">
    <option value="">Select Vehicle Type</option>
    @foreach($types as $info)
    <option value="{{$info->id}}">{{$info->brands->brand_name." ".$info->vehicle_type_name}}</option>
    <@endforeach
</select>
<input type="submit" value="submit">
</form>
</div>

@endsection