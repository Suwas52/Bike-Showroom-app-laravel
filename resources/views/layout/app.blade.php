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
        @yield('slider')

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

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
                </div>
            </nav>

            @yield('content')


        </div>
    </div>
</body>

</html>