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
        <div class="row">
            <div class="col-5 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Log In</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('loginMatch')}}" method="GET">
                            @csrf
                            <div class="mb-3">
                                <label for="useremail" class="form-label">Email :</label>
                                <input type="email" placeholder="Enter User Email .." class="form-control" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="userpassword" class="form-label">Password :</label>
                                <input type="text" placeholder="Enter password .." class="form-control" name="password">
                            </div>

                            <button class="btn btn-primary">Register</button>
                            <a href="{{route('register')}}" class="btn btn-primary">Back</a>
                        </form>

                        @if ($errors->any())
                        <div class="card-footer text-body-secondary">
                            <div alert alert-danger>
                                <ul>
                                    @foreach ($errors->all() as $error )
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>
