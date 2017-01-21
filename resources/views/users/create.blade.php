@extends('layouts.main')

@section('title', 'New user')

@section('nav')

@section('content')
    <h1 class="text-center">Adding new user</h1>
    <div class="row">
        <div class="col-lg-4"></div>

        <div class="col-lg-4">
            <form action="/users" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_name" placeholder="Enter the user name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="user_email" placeholder="User's email'">
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
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Create">
                </div>
            </form>
        </div>

        <div class="col-lg-4"></div>
    </div>
@endsection

@section('footer')