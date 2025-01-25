<x-layout>

    <x-slot:title>
        All User Data
    </x-slot>

   <td><a href="/newuser" class="btn btn-success btn-sm mb-3">Add User</a></td>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">city</th>
                <th scope="col">age</th>
                <th scope="col">Phone</th>
                <th scope="col">Password</th>
                <th scope="col">time</th>
                <th scope="col">View</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($data as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->city }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->password }}</td>
                    <td>{{ $student->created_at }}</td>
                    <td><a href="{{ route('view.user', $student->id) }}" class="btn btn-primary">View</a></td>
                    <td><a href="{{ route('update.page', $student->id) }}" class="btn btn-warning">Update</a></td>
                    <td><a href="{{ route('delete.user', $student->id) }}" class="btn btn-danger">Delete</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
