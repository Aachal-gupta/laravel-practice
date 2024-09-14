@extends('layout.masterlayout')

@section('content')
    <h2>HOME Page</h2>
    <p>The 'extends'directive is used to inherit a layout from a parent or master template. It tells Blade which layout this particular view should use.</p>
@endsection

@section('title')
home 
@endsection

@push('scripts')

{{-- this js file /link will be added on masterlayout.php file only . this link is not include in about//test/pest file --}}
<script  src="/vue.js"></script>  
<script  src="/vue.js"></script>
<script  src="/vue.js"></script>
<script  src="/vue.js"></script>
{{-- we can use multiple times then it will be multiple times added in main file  --}}
@endpush

@push('style')
    <link rel="stylesheet" href="css/style.css">
    {{-- this link will be only masterlayout on main file as well as welcome file  --}}
@endpush

@prepend('style')    
{{-- prepend mean add the given css before the style name which is write in stack('style') --}}
    <style>
        #wrapper{
            background:rgb(10, 228, 68);
        }
    </style>
@endprepend
