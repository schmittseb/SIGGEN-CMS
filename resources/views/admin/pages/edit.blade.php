@extends('layouts.app')

@section('content')

    <div class="container">
        <h4>Edit {{ $model->title }}</h4>
        <form action="{{ route('pages.update', ['page' => $model->id]) }}" method="POST">
            {{ method_field('PUT') }}
            @include('/admin/pages/partials/fields')
        </form>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/summernote-bs4.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote();
        });
    </script>
@endsection

