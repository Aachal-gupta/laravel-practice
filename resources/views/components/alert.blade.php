{{-- <div class="alert alert-{{$validType}}" role="alert">
{{$message}}
</div> --}}

<div {{$attributes->merge(['class' => "alert alert-".$validType,  'role'=>'alert'])}} >  {{-- for adding class and id purpose  and here by default role value is alert if user have not taken value at the time of call--}}
{{$message}}
</div>
