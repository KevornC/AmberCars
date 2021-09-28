@extends('layouts.nav')

@section('content')
<div style="margin-top:100px">
<h1>View Brand</h1>
<table border="5" cellspacing="0" cellpadding="1">
    <thead>
        <tr>
            <th>Brand</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $info)
        <tr>
            <td>{{$info->brand_name}}</td>
            <td>{{$info->desc}}</td>
            <td><a href="{{url('/remove/Brands/'.$info->id)}}">Remove</a>
            <a href="{{url('/Update/Brands/'.$info->id)}}">Update</a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection