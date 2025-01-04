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

    <h1 class="text-center">this is welcome page .</h1>

   <x-alert type="danger">
        <x-slot name="title" class="font-bold">
            heading goes here .
            {{$component->link("Just Testing","https://www.yahoobaba.net")}}
        </x-slot>
        <p class="mb-0">this is alert
            <a href="" class="alert-link">An example Link </a>
        </p>
   </x-alert>

   <x-card /> {{-- this data comes from card.php file from inline component--}}

   {{-- same thing by dynamic method from db --}}

   @php
       $componentName = "alert"         // -or we can take here card
   @endphp

   <x-dynamic-component :component="$componentName"  class="m-4"/>

  <x-form action="/somepage" method="PUT" id="data12" class="myfile">
    <input type="text" name="name">
    <button type="submit">submit</button>
  </x-form>
</body>
</html>
