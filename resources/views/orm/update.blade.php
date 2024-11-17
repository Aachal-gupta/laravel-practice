@extends('orm/layout')

@section('title')
Update data
@endsection

@section('content')
<form action="" method="POST">
<div class="mb-3">
        <label for="username" class="form-label">Name</label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Email </label>
        <input type="email" class="form-control" name="username">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Age</label>
        <input type="number" class="form-control" name="username">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">city</label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="mb-3">
        <label for="username" class="form-label">Votes</label>
        <input type="number" class="form-control" name="username">
    </div>

    <div class="mb-3">
        <input type="submit" name="submit" class="btn brn-success" value="update">
    </div>
</form>
endsection