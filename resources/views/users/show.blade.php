@extends('layouts.main')
@section('title', 'Viewing')
@section('nav')
@section('content')
    <h1 class="text-center">Viewing {{ $user->name }}</h1>
    <div class="row">
        <div class="col-lg-4"></div>
        
        <div class="col-lg-4">
            <p>Name: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Status: {{ $user->status }}</p>
            <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>
        </div>
        
        <div class="col-lg-4"></div>
    </div>

@endsection
@section('footer')