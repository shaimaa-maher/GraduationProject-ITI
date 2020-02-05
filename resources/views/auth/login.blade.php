@extends('layouts.app')

@section('content')

<section class="site-section">
    <div class="containerlogin">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="form-wrap">
                    <h2 class="mb-4">Log in with your account</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label name="email">Email</label>
                                <input type="text" id="email" class="form-control  py-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12 form-group">
                                <label name="password">Password</label>
                                <input type="password" id="password" class="form-control py-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            
                                <div class=" offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label pt-2" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link " href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </form>
                    <div class="verticalline">
                        <h4 class="login-with">OR</h4>
                        <div class="col-md-3">
                        <a href="login/github" class="btn btn-dark text-light"><i class="fab fa-github" style="font-size: 50px"></i> </a>
                        </div>
                        <div class="col-md-3">
                        <a href="login/google" class="btn btn-outline-primary"><i class="fab fa-google" style="font-size: 50px"></i> </a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>

@endsection