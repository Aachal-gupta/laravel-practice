@php
    
    $fruit=['one'=>'apple','two'=>'orange','three'=>'lemon','four'=>'pinapple','five'=>'grapes'];
    $condition=false;
@endphp

@include('pages.header', ['names'=>$fruit])


{{-- if the condition will be true than header file wil be includeed in it --}}
@includeWhen($condition,'pages.header',['names'=>$fruit])


{{-- if the condition will be false than  header file wil be includeed in it --}}
{{-- it is opposite to the @includeWhen --}}
@includeUnless($condition,'pages.header',['names' => $fruit])


<h1>Home pages </h1>

@include('pages.footer')
@includeIf('pages.content')       {{-- it will be 1st check this file is exist or not, if it exist they will be include that file  --}}


