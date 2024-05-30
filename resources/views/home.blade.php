<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f7fa;
        }

        .degree:after {
            content: '°C';
            position: absolute;
            font-size: 3rem;
            margin-top: 0.4rem;
            font-weight: 400;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <div class="container-fluid p-5">
            <div class="row" id="cardsContainer">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            @if(Auth::check())
                            <h5 class="card-title">Welcome!</h5>
                            <p class="card-text">GO HOME</p>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('post.index') }}" class="btn btn-primary mr-3">Login</a>
                                
                            </div>
                            @else
                            <h5 class="card-title">Welcome!</h5>
                            <p class="card-text">Please log in or register to continue.</p>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('login') }}" class="btn btn-primary mr-3">Login</a>
                                <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
</body>


</html>
