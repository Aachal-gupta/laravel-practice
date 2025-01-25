<!DOCTYPE html>
<html>
<head>
    <title class="text-centre">Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    {{-- @if($data->isEmpty())
        <p>No students found.</p>
    @else --}}
        <div class="continer px-4 mx-5">
            <div class="row">
                <div class="col-7 ">
                    <h1 class="text-center pt-2 mt-2">Student Data</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-8 bg-warning-subtle mb-3">
                    <h4>{{ $title ?? "CRUD OPERATION "}}</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-8 ">

                    {{ $slot }}

            </div>
        </div>


    {{-- @endif --}}
</body>
</html>

