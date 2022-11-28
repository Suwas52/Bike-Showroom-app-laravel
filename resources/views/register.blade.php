@extends('layout.app')

@section('content')
<section>
    <div class="container mt-5 pt-5 ">
        <div class="row ">
            <div class="col-12 col-sm-8 col-md-4 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body ">
                        <div class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-3" width="50" height="50" fill="#23395d"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />

                            </svg>
                        </div>

                        <form action="{{route('register')}}" method="post">
                            @csrf
                            @if(Session::has('error'))
                            <p class="text-danger">{{Session:get('error')}}</p>
                            @endif
                            @if (Session::has('success'))
                            <p class="text-success">{{Session::get('success')}}</p>
                            @endif

                            <div class="h1 text-center font-weight-bold " style="color:#23395d; font-weight:bold;">
                                Register</div>

                            <input type=" text" name="name" id=""
                                class="form-control my-4 py-2 fs-3 @error('name') is-invalid @enderror"
                                placeholder="Username">
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                            <input type="email" name="email" id=""
                                class="form-control my-4 py-2 fs-3 @error('email') is-invalid @enderror"
                                placeholder="Email">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror

                            <input type="password" name="password" id=""
                                class="form-control my-4 py-2 fs-3 @error('password') is-invalid @enderror"
                                placeholder="Password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror

                            <div class="text-center mt-3">
                                <button class="btn py-3 col-md-12 fs-5" style="background:#23395d; color:#fff;">Sign
                                    up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection