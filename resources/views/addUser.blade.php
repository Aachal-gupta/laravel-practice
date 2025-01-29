
<x-layout>

    <x-slot:title>
        Add User Data
        {{-- this session coems from TestController --}}
        <h1>{{ $value }}</h1>

        @if (session('status'))
            <div class="alert alert-success"> {{ session('status') }} </div>
        @endif

    </x-slot>

    <form action="{{ route('addUser1') }}" method="POST" class="m-4 p-3" style="border: 1px solid grey">
        @csrf
        <div class="mb-3">
            <label for="form-label">Name</label>
            <input type="text" class="form-control" name="username">
        </div>

        <div class="mb-3">
            <label for="form-label">Age</label>
            <input type="number" class="form-control" name="userage">
        </div>

        <div class="mb-3">
            <label for="form-label">Email</label>
            <input type="email" class="form-control" name="useremail">
        </div>

        <div class="mb-3">
            <label for="form-label">Address</label>
            <input type="text" class="form-control" name="useraddress">
        </div>

        <div class="mb-3">
            <label for="form-label">City</label>
            <input type="text" class="form-control" name="usercity">
        </div>

        <div class="mb-3">
            <label for="form-label">Phone</label>
            <input type="text" class="form-control" name="userphone">
        </div>

        <div class="mb-3">
            <label for="form-label">Password</label>
            <input type="text" class="form-control" name="userpassword">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
