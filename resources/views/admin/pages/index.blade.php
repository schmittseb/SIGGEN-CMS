@extends('layouts.app')

@section('content')

    <div class="container">
        @if (session('status'))
            <div class="alert alert-info">
                {{ session('status') }}
            </div>
    @endif






        <table class="table">
            <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>
                <th>Last modified</th>
                <th>Weight</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            @foreach($pages->sortBy('weight') as $page)
                <tr>
                    <td>
                        <a href="{{ route('pages.edit', ['page' => $page->id]) }}" class="link">{{$page->title}}</a>
                    </td>
                    <td>{{$page->url}}</td>
                    <td>{{$page->updated_at}}</td>
                    <td>{{$page->weight}}</td>
                    <td></td>
                    <td>
                        <form method="POST" action="{{route('pages.destroy', $page->id) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Delete"
                                   onclick="return confirm('Are you sure you want to delete this page?')"
                                   class="btn btn-danger"/>
                        </form>
                    </td>
                </tr>
             @endforeach
        </table>
    </div>

@endsection


