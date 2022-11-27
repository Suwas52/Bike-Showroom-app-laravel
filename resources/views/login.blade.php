@extends('layout.app')

@section('content')

<section>
    <div class="container mt-5 pt-5 ">
        <div class="row ">
            <div class="col-12 col-sm-8 col-md-4 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body ">
                        <div class="text-center">

                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-3" width="50" height="50" fill=" #23395d"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </div>
                        <!-- @if (Session::has('fail'))
                        <div class="alert alert-danger" role="alert">
                            {{session::get('fail')}}
                        </div>
                        @endif
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{session::get('success')}}
                        </div>
                        @endif -->
                        <form action="" method="post">

                            @csrf
                            <div class="h1 text-center font-weight-bold " style="color:#23395d; font-weight:bold;">
                                Please
                                Login</div>

                            <input type=" email" name="email" id="" class="form-control my-4 py-2 fs-3"
                                placeholder="Email">
                            <input type="password" name="password" id="" class="form-control my-4 py-2 fs-3"
                                placeholder="Password">
                            <div class="text-center mt-3">
                                <button class="btn  py-3 col-md-12 fs-5  " style="background:#23395d; color:#fff; ">Log
                                    In</button>
                                <p class=" fs-5 my-2">Don't have an account?<a href="{{route('register')}}"
                                        class="nav-link  " style="color:#23395d; ">Register
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection