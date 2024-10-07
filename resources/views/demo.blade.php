{{-- <h1>demo page</h1>

<h2>All Students Data </h2>
@foreach ($students as $data)  //in students is a key comes from studentscontroller file

<h3> {{$data->id}} |
     {{$data->name}} | 
    {{$data->email}} | 
    {{$data->age}} | 
    {{$data->city}} |
     {{$data->votes}} |
     {{$data->city_name}} |    </h3>
    
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
                <h1>All Users and city  List </h1><br>
                {{-- <td><a href="/newuser" class="btn btn-success btn-sm">Add user</a></td><br><br> --}}

                <table class="table table-bordered table-striped">

                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Votes</th>
                        <th>City_name</th>
                        {{-- <th>View</th>
                        <th>Delete</th>
                        <th>Update</th> --}}
                    </tr>
                    @foreach ($students as $data)
                    <tr>

                        <td class="ts">{{$data->id}}</td>
                        <td class="ts">{{$data->name}}</td>
                        <td class="ts">{{$data->email}}</td>
                        <td class="ts">{{$data->age}}</td>
                        <td class="ts">{{$data->city}}</td>
                        <td class="ts">{{$data->votes}}</td>
                        <td class="ts">{{$data->city_name}}</td>
                        {{-- <td><a href="{{route('view.user',$data->id)}}" class="btn btn-primary btn-sm">View</a></td>
                        <td><a href="{{route('delete.user',$data->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td><a href="{{route('update.page',$data->id)}}" class="btn btn-secondary btn-sm">Update</a></td> --}}

                    </tr>
                    @endforeach
                </table>
                 {{-- <div class="mt-5">    add simplePagination --}}
                    {{-- {{$data->links('pagination::bootstrap-5')}}     for paginat(4) we use bootstrap-5 or tailwind --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
    
</body>
</html>