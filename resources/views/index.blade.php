@extends('layouts.app')

@section('content')

<!-- HOME -->
<section class="home-section section-hero overlay slanted" id="home-section">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <h1>We Are Careery</h1>
                <div class="mx-auto w-75">
                    <p>Careery is your gate to see the world and discover yourself to won your life.</p>
                </div>
                <p class="mt-5"><a href="/contactus" class="btn btn-outline-white btn-md ">Get in touch</a></p>
            </div>
        </div>
    </div>

    <!-- VIDEO -->
    <div class="video-container">
        <video autoplay loop="true">
            <source type="video/mp4" src="/videos/video.mp4">
        </video>
    </div>
</section>
</div>
@endsection