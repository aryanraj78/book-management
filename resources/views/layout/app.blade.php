<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @yield('cssLink')
    <style>
        /* Custom Styles */
        body {
            padding-top: 56px; /* Height of the fixed navbar */
        }

        /* Responsive Styles */
        @media (max-width: 767px) {
            body {
                padding-top: 0;
            }
        }

        /* Adjustments for Small Screens */
        @media (max-width: 576px) {
            .col-md-12 {
                margin-bottom: 10px;
            }
        }

        .errmsg{
        font-size: 13px;
        color: #ff0000;
        }

        .successmsg{
        color: #155724;
            background-color: #d4edda;
            border:1px solid #c3e6cb;
            width: 700px;
            max-width: 100%;
            margin: 15px auto;
            padding: 20px;
            font-size: 13px;
            font-weight: 700;
        }
    </style>
    @livewireStyles
</head>
<body>

<!-- Navigation Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Book Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home </a>
            </li>
            <li class="nav-item active">
                @livewire('cart-counter')
                
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                 
                @if (Route::has('login'))
                    
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Hi {{auth()->user()->name}}</a>
                            <a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a>

                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    
                @endif
            </div>
    </div>
</nav>
@yield('content')


<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


@livewireScripts
</body>
</html>
