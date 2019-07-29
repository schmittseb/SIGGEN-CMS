@extends('layouts.app')

@section('content')

    <div class="container">
        <h4>Create new user</h4>
        <form action="{{ route('pages.store') }}" method="POST">
            @include('admin.pages.partials.fields')
        </form>
    </div>

@endsection
