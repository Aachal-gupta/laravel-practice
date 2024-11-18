@extends('orm/layout')

@section('title')
Update Data
@endsection

@section('content')
<div class="col">
<form action="{{route('home.update', $edit_data->id)}}" method="POST">    <!--from we get name from terminal by this command php artisan route:list --name=home  home is written in route web.php file-->
   @csrf  <!-- without this  token form will be not submitted -->
    @method('PUT')      <!--laravel gives the facility to updatathe data by put method -->
    <div class=" mb-3">
        <label for="username" class="form-label">Name </label>
        <input type="text" class="form-control" name="username" value="{{ $edit_data->name}}">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Email </label>
        <input type="email" class="form-control" name="useremail"  value="{{ $edit_data->email }}">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Age</label>
        <input type="number" class="form-control" name="userage"  value="{{ $edit_data->age }}">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">city</label>
        <input type="text" class="form-control" name="usercity"  value="{{ $edit_data->city }}">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Votes</label>
        <input type="number" class="form-control" name="uservotes"  value="{{ $edit_data->votes }}">
    </div>

    <div class="mb-3">
        <input type="submit" name="submit" class="btn btn-success" value="Save">
    </div>
</form>
</div>
@endsection