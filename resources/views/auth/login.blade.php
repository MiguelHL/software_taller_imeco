@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <!-- Style -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('content')

<div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ route('login') }}" method="POST">
                            @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="email"
                                name="email"
                                id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                autocomplete="email"
                                autofocus required>
                                @error('email')
                                    <span class="bg-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password"
                                name="password"
                                id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                required autocomplete="current-password">
                                @error('password')
                                    <span class="bg-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="remember" class="text-info">
                                    <span>Remember me</span> 
                                    <span>
                                        <input id="remember" name="remember" type="checkbox">
                                    </span>
                                </label>
                                <br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">

                                <a href="#" class="text-info">Register here</a> <br>
                                @if (Route::has('password.request'))
                                    <a class="text-info" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
