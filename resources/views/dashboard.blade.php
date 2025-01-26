<!DOCTYPE html>
<html>
<head>
    <title class="text-centre">Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

        <div class="continer px-4 mx-5">
            <div class="row">
                <div class="col-7 ">
                    <h1 class="text-center pt-2 mt-2">Authentication </h1>
                    {{Auth::user()}}
                </div>
            </div>

            <div class="row">
                <div class="col-8 ">

                    <h2>Welcome {{Auth::user()->name}}</h2>
            </div>

            <div class="row">
                <div class="col-6 ">
                    <a href="/" class="btn btn-primary">Go to Student Page </a>
                    <a href="{{ route('logout')}}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
</body>
</html>

