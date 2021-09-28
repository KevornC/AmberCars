@extends('layouts.nav')

@section('content')
<div style="margin-top:100px">
<h1>View Types</h1>
<table border="5" cellspacing="0" cellpadding="1">
    <thead>
        <tr>
            <th>Vehicle Type</th>
            <th>Brand</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($types as $info)
        <tr>
            <td>{{$info->vehicle_type_name}}</td>
            <td>{{$info->brands->brand_name}}</td>
            <td><a href="{{url('/remove/Types/'.$info->id)}}">Remove</a> <a href="{{url('/Update/Types/'.$info->id)}}">Update</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection