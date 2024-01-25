@extends('layout.app')
@section('title', 'Book Management | Login')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f8f9fa;
    }

    .login-container {
        max-width: 400px;
        margin: auto;
        margin-top: 100px;
    }
</style>
@section('content')


    @livewire('login')
@endsection