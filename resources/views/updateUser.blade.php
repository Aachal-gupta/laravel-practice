<x-layout>

    <x-slot:title>
        Update User data
    </x-slot>
    <form action="{{ route('update.user', $data->id) }}" method="POST" class="m-4 p-3" style="border: 1px solid grey">
        @csrf
        <div class="mb-3">
            <label for="form-label">Name</label>
            <input type="text" value="{{ $data->name }}" class="form-control" name="username">
        </div>

        <div class="mb-3">
            <label for="form-label">Age</label>
            <input type="number" value="{{ $data->age }}" class="form-control" name="userage">
        </div>

        <div class="mb-3">
            <label for="form-label">Email</label>
            <input type="email" value="{{ $data->email }}" class="form-control" name="useremail">
        </div>

        <div class="mb-3">
            <label for="form-label">Address</label>
            <input type="text" value="{{ $data->address }}" class="form-control" name="useraddress">
        </div>

        <div class="mb-3">
            <label for="form-label">City</label>
            <input type="text" value="{{ $data->city }}" class="form-control" name="usercity">
        </div>

        <div class="mb-3">
            <label for="form-label">Phone</label>
            <input type="text" value="{{ $data->phone }}" class="form-control" name="userphone">
        </div>

        <div class="mb-3">
            <label for="form-label">Password</label>
            <input type="text" value="{{ $data->password }}" class="form-control" name="userpassword">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
