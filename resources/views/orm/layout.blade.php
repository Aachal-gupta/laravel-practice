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
    <div class="container">
        <div class="row">
            <div class="col">
                
                <div class="row text-center alert alert-success">
                    <h1>ELOQUENT  CRUD ORM (object relation mapping) 
                    </h1>
                </div>

                <div class="row ">
                    <div class="col bg-warning-subtle mb-3">
                        <h1> @yield('title')</h1>
                    </div>
                </div>

                <div class="row ">
                    <div class="col">
                        @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                        @endif
                    </div>
                </div>

                @yield('content')
                
            </div>
        </div>
    </div>
    
</body>
</html>