<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showroom-App</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Bike Showroom</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="{{route('list')}}" data-toggle="collapse" aria-expanded="false" class="">Dashboard</a>
                </li>
                <li class="active">
                    <a href="{{route('create')}}" data-toggle="collapse" aria-expanded="false" class="">Add Product</a>
                </li>
                <li class="active">
                    <form action="{{route('logout')}}" method="get">
                        <button data-toggle="collapse" aria-expanded="false" class="btn btn-danger mx-5 my-3">Log
                            Out</button>
                    </form>

                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid justify-content-between">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav sl-icons">
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                    @auth
                    <div class="contain ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-person d-block center mx-5" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                        </svg>
                        <a href="{{route('login')}}" class=" navbar-brand d-">{{auth()->user()->name}}</a>
                    </div>
                    @endauth

                    @guest
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto justify-space-between">
                            <li class="nav-item active px-2">
                                <a class="nav-link fs-4 " href="#">Home</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link fs-4" href="{{route('login')}}">Login </a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link fs-4" href="{{route('register')}}">Register</a>
                            </li>
                        </ul>
                    </div>
                    @endguest
                </div>
            </nav>

            @yield('list')
            @yield('create')


        </div>
    </div>
</body>

</html>