{{-- <div class="alert alert-{{$validType}}" role="alert">
{{$message}}
</div> --}}

<div {{$attributes->merge(['class' => "alert alert-".$validType,  'role'=>'alert'])}} >  {{-- for adding class and id purpose  and here by default role value is alert if user have not taken value at the time of call--}}

    @isset($title)  {{--when title is set then only it will be run code in welcome.blade.php --}}
    <h4 {{$title->attributes->class(['alert-heading'])}}>{{$title}}</h4>   {{--/this data is pass from slot in alert.blade.php--}}
    <hr>
    @endisset



    @if ($slot->isEmpty())
        <p>this is default content if the slot is empty .
        </p>
    @else
        {{$slot}}
    @endif




</div>
