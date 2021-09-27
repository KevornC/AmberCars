@extends('layouts.nav')

@section('content')
<div style="margin-top:100px">
<h1>Add Vehicle Type</h1>
<form action="/addtype" method="post">
    @csrf
<input type="text" name="type" placeholder="Enter Type">
<select name="brand_id">
    <option value="">Select Brand</option>
    @foreach($brand as $info)
    <option value="{{$info->id}}">{{$info->brand_name}}</option>
    @endforeach
</select>
<input type="submit" value="submit">
</form>
</div>

@endsection