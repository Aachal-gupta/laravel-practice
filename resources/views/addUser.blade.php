<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add-User Form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>Add New User</h1>
            <form action="{{route('add.user')}}" method="POST">
                @csrf           {{-- @csrf  is important to add at the top of table   --}}

                <div class="mb-3">
                    <label for="form-label">Name</label>
                    <input type="text" class="form-control" name="username">
                </div>

                <div class="mb-3">
                    <label for="form-label">Email</label>
                    <input type="text" class="form-control" name="useremail">
                </div>

                <div class="mb-3">
                    <label for="form-label">age</label>
                    <input type="text" class="form-control" name="userage">
                </div>

                <div class="mb-3">
                    <label for="form-label">City</label>
                    <input type="text" class="form-control" name="usercity">
                </div>

                <div class="mb-3">
                    <label for="form-label">Votes</label>
                    <input type="text" class="form-control" name="uservotes">
                </div>

                <button class="btn btn-primary">submit</button>
               
            </form>
        </div>
    </div>
</div>
    
</body>
</html>