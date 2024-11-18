@extends('orm/layout')    <!-- include the layout file -->

@section('title')
    All User Data
@endsection

@section('content')

<td><a href="{{route('home.create')}}" class="btn btn-success btn-sm">Add user</a></td><br><br>

<table class="table table-bordered table-striped">

    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>City</th>
        <th>Votes</th>
        <th>View</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    @foreach ($data as  $datas )
    <tr>

        <td class="ts">{{$datas->id}}</td>
        <td class="ts">{{$datas->name}}</td>
        <td class="ts">{{$datas->email}}</td>
        <td class="ts">{{$datas->age}}</td>
        <td class="ts">{{$datas->city}}</td>
        <td class="ts">{{$datas->votes}}</td>
        <td><a href="{{ route('home.show',$datas->id) }}" class="btn btn-primary btn-sm">View</a></td>
        <td> <!-- we can not write directly in href . we have to write in form tage for delete -->
           <form action="{{route('home.destroy',$datas->id)}}" method="POST">
            @csrf
            @method('DELETE')
               <button type="delete" class="btn btn-danger btn-sm">Delete</button>
            </form>  
        </td>
        <td><a href="{{ route('home.edit',$datas->id) }}" class="btn btn-secondary btn-sm">Update</a></td>

    </tr>
    @endforeach
</table>

<div class="mt-4">
    {{$data->links()}}
</div>

@endsection