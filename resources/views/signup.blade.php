@extends('layout.app')
@section('title', 'Book Management | Signup')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .signup-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
        }
    </style>
@section('content')

 @livewire('signup')

@endsection