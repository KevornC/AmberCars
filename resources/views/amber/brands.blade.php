@extends('layouts.nav')

@section('content')
<div style="margin-top:100px">
<h1>Add Brand</h1>
<form action="/" method="post">
    @csrf
<input type="text" name="brand" placeholder="Enter Brand">
<input type="text" name="desc" placeholder="Enter Description">
<input type="submit" value="submit">
</form>
</div>

@endsection