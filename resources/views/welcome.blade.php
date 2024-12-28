<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @php
        $message = "this is common";
    @endphp


    <x-alert /> {{--  this is by default use--}}
    <x-alert  type="info" :$message/>
    <x-alert  type="primary" :message=" $message "/>
    <x-alert  type="success" role="alert" message="{{ $message }}"/>
    <x-alert  type="info" role="alert"  id="first" class="m-4" message="this is danger"/>

</body>
</html>
