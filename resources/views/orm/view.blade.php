@extends('orm/layout')

@section('title')
View User Data
@endsection

@section('content')
<table class="table table-striped table-bordered">
    <tr>
        <th width="80px"> Name : </th>    <!-- $v_data comes from method show ehich is in ormuserController file -->
        <td>{{$v_data->name}}</td>
    </tr>
    <tr>
        <th> Email : </th>
        <td>{{$v_data->email}}</td>
    </tr>
    <tr>
        <th> Age : </th>
        <td>{{$v_data->age}}</td>
    </tr>
    <tr>
        <th> City : </th>
        <td>{{$v_data->city}}</td>
    </tr>
    <tr>
        <th> Votes : </th>
        <td>{{$v_data->votes}}</td>
    </tr>

</table>
<a href="{{route('home.index')}}" class="btn btn-danger">Back</a>
@endsection