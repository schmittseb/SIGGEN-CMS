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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th></th>
                </tr>
            </thead>
                @foreach($model as $user)
                    <tr>
                        <td>
                            <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="link">{{$user->name}}</a>
                        </td>
                        <td>{{$user->email}}</td>
                        <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                        <td>
                        <form method="POST" action="{{route('users.destroy', $user->id) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-danger"/>
                        </form>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>

@endsection
