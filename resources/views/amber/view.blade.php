@extends('layouts.nav')

@section('content')
<div style="margin-top:100px">
<h1>View Model</h1>
<table border="5" cellspacing="0" cellpadding="1">
    <thead>
        <tr>
            <th>Model Name</th>
            <th>Year</th>
            <th>Color</th>
            <th>Condition</th>
            <th>Milage</th>
            <th>Capacity</th>
            <th>Driver Side</th>
            <th>Transmission</th>
            <th>Vehicle Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($models as $info)
        <tr>
            <td>{{$info->model_name}}</td>
            <td>{{$info->year}}</td>
            <td>{{$info->color}}</td>
            <td>{{$info->condition}}</td>
            <td>{{$info->milage}}</td>
            <td>{{$info->capacity}}</td>
            <td>{{$info->driverside}}</td>
            <td>{{$info->trans_type}}</td>
            <td>{{$info->vehicletypes->vehicle_type_name}}</td>
            <td><a href="{{url('/remove/Models/'.$info->id)}}">Remove</a><a href="{{url('/Update/Models/'.$info->id)}}">Update</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection