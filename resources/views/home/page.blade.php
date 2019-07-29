@extends('layouts.frontend')

@section('content')
<div class="container frontend">
    {!! html_entity_decode($page->content) !!}
</div>
@endsection
