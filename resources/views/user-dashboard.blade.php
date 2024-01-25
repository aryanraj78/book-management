@extends('layout.app')
@section('title', 'Book Management | Dashboard')
<style>
        body {
            background-color: #f8f9fa;
        }

        .dashboard-container {
            max-width: 800px;
            margin: auto;
            margin-top: 50px;
        }
    </style>
@section('content')
@livewire('user-dashboard')
@endsection