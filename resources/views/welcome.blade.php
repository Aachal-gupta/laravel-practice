<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container p-4">
        <div class="row m-5">
            <div class="card col-8">
                <div class="card-header  m-2">
                    <h2 class="text-center">User Authentication </h2>
                </div>
                <div class=" card-body text-cenetr m-5 p-3">
                    <div class="mb-3 p-3 ">
                        <a href="{{route('register')}}"><button class="btn btn-primary text-center m-4" type="register">
                            Register
                        </button></a>

                        <a href="{{route('login')}}"><button class="btn btn-primary text-cenetr m-4" type="login">
                            Login
                        </button></a>

                    </div>

                </div>
            </div>



        </div>
    </div>

    </div>
</body>

</html>
