@extends('layouts')

@section('title', 'Dashboard Page')

@section('content')
    <div class="container">
        <h1 class="text-center mb-3">Welcome to your dashboard, {{ Auth::user()->name }}!</h1>
    </div>
@endsection
