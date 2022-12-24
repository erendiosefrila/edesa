@extends('login.layout')

@section('content')
</head>
<body>
        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-150 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-14 col-sm-10 col-md-8 col-lg-7 col-xl-6">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <img src={{ asset('img/logo-desa.png')}} alt="Image" height="90px" width="90px">
                                <p style="text-align:center">Desa Suruh</p>
                            </a>
                        </div>
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="username" class="form-control @error('username') is-invalid
                                @enderror" id="username" placeholder="username" autofocus required value="{{ old('username')}}">
                                <label for="username">Username</label>
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
</body>

@endsection