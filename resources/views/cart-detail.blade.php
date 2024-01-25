@extends('layout.app')
@section('title', 'Book Management | Cart Detail')
<style>
        body {
            background-color: #f8f9fa;
        }

        .cart-container {
            max-width: 800px;
            margin: auto;
            margin-top: 50px;
        }
    </style>
@section('content')

@livewire('cart-detail')
@endsection