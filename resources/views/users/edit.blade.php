@extends('layouts.main')
@section('title', 'Editing')
@section('nav')
@section('content')
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form action="{{ url('users/' . $user->id) }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="user_name" class="form-control" placeholder="Enter a name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="user_email" class="form-control" placeholder="Enter an email">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="user_status" class="form-control">
                        <option value="0">Select a status</option>
                        <option value="1">Working</option>
                        <option value="2">Leave</option>
                        <option value="3">Resigned</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
@endsection
@section('footer')