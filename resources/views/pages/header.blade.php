<h1>Header page</h1>

{{-- @foreach ($names as $keys=>$value )
    <p>{{$keys}} - {{$value}}</p>
@endforeach
<br> --}}
@forelse($names as $keys=>$value)
    <p>{{$keys}} - {{$value}}</p>
@empty
    <p> No value found !</p>
@endforelse