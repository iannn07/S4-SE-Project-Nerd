@extends('layouts.app')
@section('content')
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" class="register-form" id="login-form"
                action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-b-43"> Login </span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    {{-- <input class="input100" type="text" name="email" /> --}}
                    <input id="email" type="email" class="form-control input100 @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    {{-- <input class="input100" type="password" name="password" /> --}}
                    <input id="password" type="password"
                        class="form-control input100 @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32" style="width: 80%; margin: 0 auto">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" />
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div>
                        <a href="#" class="txt1"> Forgot Password? </a>
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">Login</button>
                </div>

                <div class="text-center p-t-46 p-b-20">
                    <span class="txt2"> or <a href="{{ route('register') }}"> Sign Up</a></span>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('{{ asset('Admin Assets/img/aesthetic.jpeg') }}')"></div>
        </div>
    </div>
    <script src="{{ asset('Admin Assets/Login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Login/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('Admin Assets/Login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Login/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Login/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Login/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('Admin Assets/Login/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('Admin Assets/Login/js/main.js') }}"></script>
@endsection
{{-- <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-center text-center">
                    <img src="{{ asset('Admin Assets/Login Assets/images/undraw_remotely_2j6y.svg') }}" alt="Image"
                        class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4 text-center">
                                <h1>Ian Personal Web Admin</h1>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>

                                <input type="submit" class="btn btn-block btn-secondary"
                                    style="background-color: #6c63ff; border-color: #6c63ff; font-size: 20px;"
                                    value="Log In">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
