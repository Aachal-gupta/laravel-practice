<x-layout>

    <x-slot:title>
        View Single User Data
    </x-slot>

  <table class="table table-striped table-bordered">
        @foreach ($data as $id => $users)
            <tr>
                <th width="80px">Name :</th>
                <td>{{ $users->name }}</td>
            </tr>

            <tr>
                <th width="80px">Email :</th>
                <td>{{ $users->email }}</td>
            </tr>

            <tr>
                <th width="80px">Age :</th>
                <td>{{ $users->age }}</td>
            </tr>

            <tr>
                <th width="80px">City :</th>
                <td>{{ $users->city }}</td>
            </tr>

            <tr>
                <th width="80px">Phone :</th>
                <td>{{ $users->phone }}</td>
            </tr>

            <tr>
                <th width="80px">Address:</th>
                <td>{{ $users->address }}</td>
            </tr>

            <tr>
                <th width="80px">Password :</th>
                <td>{{ $users->password }}</td>
            </tr>
        @endforeach
    </table>
</x-layout>
