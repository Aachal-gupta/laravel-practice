@props([
    'action',
    'method'=>'POST'
])

<form action="{{$action}}" method="{{$method === 'GET' ? 'GET' : 'POST'}}"  {{$attributes}} > {{-- for adding id and class from welcome.php page write attributes --}}
    @csrf

    @unless (in_array($method,['GET','POST']))
        $method($method)
    @endunless

    {{-- @method('PUT') --}}
    {{$slot}}
</form>
