@extends('layouts.app')

@section('content')

<br><br>
<link rel="stylesheet" href="/css/profile.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container main-secction">
    <!-- <div class="container main-secction"> -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 image-section">
            <img src="/images/background2.jpg">
        </div>
        <div class="row user-left-part">
            <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                <div class="row ">
                    <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                        @if(Auth::user()->image)
                        <img src="{{asset( Auth::user()->image )}}" class="rounded-circle img-thumbnail">
                        @else
                        <img src="/images/avatar.png" class="rounded-circle img-thumbnail">
                        @endif
                    </div>
                    <div class="col-md-12 profile-header">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 ml-4">
                                <h1>{{ Auth::user()->first_name}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center mt-3">
                        <a id="btn btn-primary" href="{{route('profiles.edit')}}" class="btn btn-success btn-block ">Edit Profile</a>

                    </div>

                </div>
            </div>

            <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section mt-5">
                <div class="row profile-right-section-row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="nav nav-tabs ml-4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active " href="#profile" role="tab" data-toggle="tab"><i
                                                class="fas fa-user-circle"></i>Personal </a>
                                    </li>
                                </ul>
                                    
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active mt-4 ml-4 " id="profile">
                                        <div class="row ">
                                            <div class="col-md-2 mt-1">
                                                <label>First</label>
                                            </div>
                                            <div class="col-md-6 ml-3">
                                                <p>{{ Auth::user()->first_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label>Last</label>
                                            </div>
                                            <div class="col-md-6 ml-3">
                                                <p>{{ Auth::user()->last_name}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-2 mt-1">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6 ml-3">
                                                <p>{{ Auth::user()->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label>Country</label>
                                            </div>
                                            <div class="col-md-6 ml-3">
                                                <p>{{ Auth::user()->country}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label>Birthdate</label>
                                            </div>
                                            <div class="col-md-6 ml-3">
                                                <p>{{ Auth::user()->birthdate}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 ">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6 ml-3">
                                                <p>{{ Auth::user()->gender}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<br><br><br>

@endsection