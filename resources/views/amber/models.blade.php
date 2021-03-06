@extends('layouts.nav')

@section('content')
<style>
    /* 64ac15 */
*,
*:before,
*:after {
  box-sizing: border-box;
}
body {
  padding: 1em;
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 15px;
  color: #b9b9b9;
  /* background-color: #e3e3e3; */
  background: linear-gradient(#141e30, #243b55);
}
h4 {
  color: #f0a500;
}
input,
input[type="radio"] + label,
input[type="checkbox"] + label:before,
select option,
select {
  width: 100%;
  padding: 1em;
  line-height: 1.4;
  background-color: #f9f9f9;
  border: 1px solid #e5e5e5;
  border-radius: 3px;
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
input:focus {
  outline: 0;
  border-color: #bd8200;
}
input:focus + .input-icon i {
  color: #f0a500;
}
input:focus + .input-icon:after {
  border-right-color: #f0a500;
}
input[type="radio"] {
  display: none;
}
input[type="radio"] + label,
select {
  display: inline-block;
  width: 50%;
  text-align: center;
  float: left;
  border-radius: 0;
}
input[type="radio"] + label:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
input[type="radio"] + label:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
input[type="radio"] + label i {
  padding-right: 0.4em;
}
input[type="radio"]:checked + label,
input:checked + label:before,
select:focus,
select:active {
  background-color: #f0a500;
  color: #fff;
  border-color: #bd8200;
}
input[type="checkbox"] {
  display: none;
}
input[type="checkbox"] + label {
  position: relative;
  display: block;
  padding-left: 1.6em;
}
input[type="checkbox"] + label:before {
  position: absolute;
  top: 0.2em;
  left: 0;
  display: block;
  width: 1em;
  height: 1em;
  padding: 0;
  content: "";
}
input[type="checkbox"] + label:after {
  position: absolute;
  top: 0.45em;
  left: 0.2em;
  font-size: 0.8em;
  color: #fff;
  opacity: 0;
  font-family: FontAwesome;
  content: "\f00c";
}
input:checked + label:after {
  opacity: 1;
}
select {
  height: 3.4em;
  line-height: 2;
}
select:first-of-type {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
select:last-of-type {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
select:focus,
select:active {
  outline: 0;
}
select option {
  background-color: #f0a500;
  color: #fff;
}
.input-group {
  margin-bottom: 1em;
  zoom: 1;
}
.input-group:before,
.input-group:after {
  content: "";
  display: table;
}
.input-group:after {
  clear: both;
}
.input-group-icon {
  position: relative;
}
.input-group-icon input {
  padding-left: 4.4em;
}
.input-group-icon .input-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 3.4em;
  height: 3.4em;
  line-height: 3.4em;
  text-align: center;
  pointer-events: none;
}
.input-group-icon .input-icon:after {
  position: absolute;
  top: 0.6em;
  bottom: 0.6em;
  left: 3.4em;
  display: block;
  border-right: 1px solid #e5e5e5;
  content: "";
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.input-group-icon .input-icon i {
  -webkit-transition: 0.35s ease-in-out;
  -moz-transition: 0.35s ease-in-out;
  -o-transition: 0.35s ease-in-out;
  transition: 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
}
.container {
  max-width: 60em;
  max-height:50em;
  padding: 1em 3em 2em 3em;
  margin: 0em auto;
  background-color: #fff;
  border-radius: 4.2px;
  box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
  background: linear-gradient(#141e30, #243b55);
}
.row {
  zoom: 1;
}
.row:before,
.row:after {
  content: "";
  display: table;
}
.row:after {
  clear: both;
}
.col-half {
  padding-right: 10px;
  float: left;
  width: 50%;
}
.col-half:last-of-type {
  padding-right: 0;
}
.col-third {
  padding-right: 10px;
  float: left;
  width: 33.33333333%;
}
.col-third:last-of-type {
  padding-right: 0;
}
@media only screen and (max-width: 540px) {
  .col-half {
    width: 100%;
    padding-right: 0;
  }
}

    </style>
<!-- <div style="margin-top:100px">
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
</div> -->


<div class="container">
    <h2>Add Model</h2>
<form action="/addmodel" method="post">
    @csrf
        <div class="row">
            <!-- <h4>Account</h4> -->
            <div class="input-group input-group-icon"><input type="text" name="model_name" placeholder="Enter Model Name">
                <!-- <div class="input-icon"><i class="fa fa-user"></i></div> -->
            </div>
            <div class="input-group input-group-icon"><input type="date" name="year" placeholder="Enter Year">
                <!-- <div class="input-icon"><i class="fa fa-envelope"></i></div> -->
            </div>
            <div class="input-group input-group-icon"><input type="text" name="color" placeholder="Enter Color">
                <div class="input-icon"><i class="fa fa-key"></i></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- <h4>Date of Birth</h4> -->
                <div class="input-group">
                    <div class="col-third"><input type="text" name="condition" placeholder="Enter Condition"></div>
                    <div class="col-third"><input type="text" name="milage" placeholder="Enter Milage"></div>
                    <div class="col-third"><input type="text" name="capacity" placeholder="Enter Capacity"></div>
                </div>
            <!-- </div> -->
                <div class="input-group"><select name="driverside">
    <option value="">Select Driver Side</option>
    <option value="Left">Left</option>
    <option value="Right">Right</option>
</select><select name="trans_type">
    <option value="">Transmission Type</option>
    <option value="Automatic">Automatic</option>
    <option value="Manual">Manual</option>
</select><div style="margin-left:260px; padding-top:50px"><select name="vehicle_type_id">
    <option value="">Select Vehicle Type</option>
    @foreach($types as $info)
    <option value="{{$info->id}}">{{$info->brands->brand_name." ".$info->vehicle_type_name}}</option>
    <@endforeach
</select></div></div>
        </div>
</div>
        <input type="submit" value="submit">
    </form>
</div>

@endsection