@extends('layouts.main')

@section('title', 'Home')

@section('nav')

@section('content')
    <h1 class="text-center">Viewing all the users</h2>
    @if(Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->status }}</td>
                    <td>
                        <a href="{{ url('users/' . $value->id) }}" class="btn btn-small btn-success">View</a>
                        <a href="{{ url('users/' . $value->id . '/edit') }}" class="btn btn-small btn-info">Edit</a>
                        <form action="{{ url('users/' . $value->id) }}" method="post" class="pull-right">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="delete">
                            <input type="submit" class="btn-small btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footer')