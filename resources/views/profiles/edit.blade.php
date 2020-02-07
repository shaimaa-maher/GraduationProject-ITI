@extends('layouts.app')

@section('content')
<br><br><br>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container ">
    <div class="row">
        <div class="col-sm-10 ml-5">
            <h1>{{Auth::user()->first_name}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
            <form method="POST" action="/profile/update" id="registrationForm" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @method('patch')


                <div class="text-center">
                    <img src="{{asset( Auth::user()->image )}}" class="avatar rounded-circle img-thumbnail"
                        alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" name="image"
                        class="@error('photo') is-invalid @enderror text-center center-block file-upload" >
                </div>
                </hr><br>


        </div>
        <!--/col-3-->
        <div class="col-sm-9">
            <h3 class="text-primary">Personal Information</h1>


                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>

                        <div class="col-xs-6">
                            <label for="first_name">
                                <h4>first name</h4>
                            </label>
                            <input type="text" class="form-control" name="first_name"
                                value="{{ Auth::user()->first_name}}" id="first_name" placeholder="first name"
                                title="enter your first name if any." required>
                        </div>


                        <div class="col-xs-6">
                            <label for="last_name">
                                <h4>Last name</h4>
                            </label>
                            <input type="text" class="form-control" name="last_name"
                                value="{{ Auth::user()->last_name}}" id="last_name" placeholder="last name"
                                title="enter your last name if any." required>
                        </div>

                        <div class="col-xs-6">
                            <label for="email">
                                <h4>email</h4>
                            </label>
                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email}}"
                                id="email" placeholder="email" title="enter your email if any." required>
                        </div>

                        <div class="col-xs-6">
                            <label for="password">
                                <h4>password</h4>
                            </label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="password" title="enter your password if any." required>
                        </div>

                        <div class="col-xs-6">
                            <label for="country">
                                <h4>country</h4>
                            </label>
                            <input type="text" class="form-control" name="country" value="{{ Auth::user()->country}}"
                                id="country" placeholder="country" title="enter your country if any." required>
                        </div>

                        <div class="col-xs-6">
                            <label for="last_name">
                                <h4>birthdate</h4>
                            </label>
                            <input type="date" class="form-control" name="birthdate"
                                value="{{ Auth::user()->birthdate}}" id="birthdate" placeholder="birthdate"
                                title="enter your birthdate if any." required>
                        </div>

                        <div class="row">
                            <div class="col-md-12 ml-3 form-group">
                                <div class="form-check">
                                    <input type="radio" name="gender" value="male"><label for="male">Male</label>
                                    <input type="radio" name="gender" value="female"><label for="female">Female</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i
                                        class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                    Reset</button>
                            </div>
                        </div>


                        <hr>

                    </div>
                    <!--/tab-pane-->
                </div>
                <!--/tab-content-->

        </div>
        <!--/col-9-->
    </div>
    <!--/row-->
</div>

</form>
<br><br><br>
@endsection