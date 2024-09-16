<h1>User page </h1>

{{-- <h3>Hello {{$user}}</h3>
<h3>City : {{$city}}</h3> --}}

{{-- <h3>Hello {{$user}}</h3>
<h3>City:{!! $city !!}</h3>
<h3>Hello {{!empty($user) ? $user: 'Unknown person'}}</h3> --}}



{{-- show all data of users in user file  --}}

<h3>Name : {{ $id['name']}}</h3>
<h3>Phone : {{ $id['phone']}}</h3>
<h3>City : {{ $id['city']}}</h3>