@extends('orm/layout')

@section('title')
add Data
@endsection

@section('content')
<div class="col">
<form action="{{route('home.store')}}" method="POST">    <!--from we get name from terminal by this command php artisan route:list --name=home  home is written in route web.php file-->
   @csrf  <!-- without this  token form will be not submitted -->

    <div class=" mb-3">
        <label for="username" class="form-label">Name </label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Email </label>
        <input type="email" class="form-control" name="useremail">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Age</label>
        <input type="number" class="form-control" name="userage">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">city</label>
        <input type="text" class="form-control" name="usercity">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Votes</label>
        <input type="number" class="form-control" name="uservotes">
    </div>

    <div class="mb-3">
        <input type="submit" name="submit" class="btn btn-success" value="Save">
    </div>
</form>
</div>
@endsection