@extends('layouts.app')

@section('content')

<section class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="form-wrap">
                    <h2 class="mb-5">Create new account</h2>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label name="first_name">First Name</label>
                                <input type="text" id="first_name" class="form-control py-2 @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label name="last_name">Last Name</label>
                                <input type="text" id="last_name" class="form-control py-2 @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label name="email">Email</label>
                                <input type="text" id="email" class="form-control py-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label name="country">Country</label>
                                <input type="text" id="country" class="form-control py-2 @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label name="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label name="password">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <div class="form-group">
                                    <label for="birthdate" class="control-label">Enter your date of birth</label>
                                    <input id="birthdate" name="birthdate" class="form-control input-lg js-date--west" type="date" placeholder="_ _ /_ _ /_ _ _ _">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row form-group ">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Your Image') }}</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="image" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ml-3 form-group">
                                <div class="form-check">
                                    <input type="radio" name="gender" value="male"><label for="male">Male</label>
                                    <input type="radio" name="gender" value="female"><label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <button type="submit" class="btn btn-primary mt-1 px-4 py-1">
                                    Create new account
                                </button>
                            </div>
                            <div class="col-md-6 form-group">

                                <a href="/login" class="btn btn-primary mt-2 px-5 ">Login instead</a>

                            </div>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection