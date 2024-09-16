

{{-- ******   for array   ******* --}}
@foreach ($user as $id=>$u)
    <h3>{!!$id!!} |{{$u['name']}} | {{$u['phone']}} | {{$u['city']}}
      | <a href="{{route('view.user',$id)}}">show</a>  
    </h3>
@endforeach
