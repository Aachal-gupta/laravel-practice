@extends('layout.masterlayout')

@section('content')
<h2> pest page</h2>
<p>The yield directive defines placeholders or sections within a layout 
    that child views can fill in with their own content.
     It's like leaving a blank spot in your master layout that different
      pages can populate with specific content.

</p>
@endsection

@section('sidebar')
@parent
this is inheritance :parent to child data is recived by section and parent directives
@endsection