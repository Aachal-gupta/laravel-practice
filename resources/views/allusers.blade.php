{{-- <h1>All Users List </h1>

@foreach ($data as $id => $user )
<h3>
    {{$user->name}} | {{$user->age}} | {{$user->city}} | {{$user->email}} | 
</h3>
    
@endforeach --}}

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
            <div class="col-6">
                <h1>All Users List </h1>
                <td><a href="/newuser" class="btn btn-success btn-sm">Add user</a></td><br><br>

                <table class="table table-bordered table-striped">

                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Votes</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $id => $user )
                    <tr>

                        <td class="ts">{{$user->id}}</td>
                        <td class="ts">{{$user->name}}</td>
                        <td class="ts">{{$user->email}}</td>
                        <td class="ts">{{$user->age}}</td>
                        <td class="ts">{{$user->city}}</td>
                        <td class="ts">{{$user->votes}}</td>
                        <td><a href="{{route('view.user',$user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                        <td><a href="{{route('delete.user',$user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td><a href="{{route('update.page',$user->id)}}" class="btn btn-secondary btn-sm">Update</a></td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>