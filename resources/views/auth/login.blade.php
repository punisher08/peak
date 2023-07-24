@extends('layouts.app')

@section('content')
<div class="container" id="login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="card p-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-5 ">
                            <button class="button">
                                <img src="https://img.icons8.com/color/48/undefined/google-logo.png" alt="google logo" class="img">
                                <p>Sign in with Google</p>
                            </button>
                            <button class="button my-3">
                                <img src="https://img.icons8.com/ios-filled/50/undefined/mac-os.png" alt="apple logo" class="img">
                                <p>Sign in with Apple</p>
                            </button>
                            <p class="text-center or">or</p>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="text-center mb-3">
                                <img src="https://img.icons8.com/color/48/undefined/twitter--v1.png" alt="twitter logo" class="img-fluid">
                            </div>
                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="btn-holder">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}  >

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="mb-4 btn-holder">
                                <button type="submit" class="btn btn-login">
                                    {{ __('Login') }}
                                </button>
                                <button type="button" class="btn btn-register">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </button>
                            </div>
                            <div class="btn-holder">
                                <button type="button" class="btn btn-forgot-pass">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
