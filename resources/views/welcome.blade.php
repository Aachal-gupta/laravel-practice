{!!'<h1>Basic syntax of blade template</h1>'!!}
<br>
{{'3+5='}}
{{3+5}}

<br><br>
{{"hello world"}}

<br><br>
{{"<h1>hello world </h1>"}}

<br><br>
{!!"<script>alert('hello , Good morning ') </script>"!!}

{{-- {{comment statement}} --}}

<br><br>
@php
$user="declare variable";
$name=['arigit singh','akshay kumar', 'priyanka chopra', 'pankaj tripathi','sharukh khan'];
@endphp
{{$user}}

<br>
@{{$user}}
<br>
@@if()

<br><br>
<ul>
    @foreach ($name as $n )
    @if($loop->odd)
        <li  style="color:red ;">{{$n}}</li>
    @elseif($loop->even)
        <li  style="color:rgb(21, 196, 33) ;">{{$n}}</li>
    {{-- @else
        <li  style="color:red ;">{{$n}}</li> --}}
    @endif
    @endforeach
</ul>

<br>


