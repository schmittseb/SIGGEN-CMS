@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('pages.store') }}" method="POST">
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