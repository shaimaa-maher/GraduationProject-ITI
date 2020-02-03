@extends('layouts.app')

@section('content')

<!-- HOME -->
<section class="home-section section-hero overlay slanted" id="home-section">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <div class="form-search-wrap p-2 " data-aos="fade-up" data-aos-delay="200">
                    <form method="post" id="live-search" action="coursesview.html">
                        <h1 data-aos="fade-up">Find Your <span class="typed-words"></span></h1>
                        <p></p>
                        
                            <div class="dropdown show">
                                <a class="btn btn-primary  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Choose your career </a>

                                <div class="dropdown-menu dropdown-menu-search"  aria-labelledby="dropdownMenuLink">
                                    @foreach($jobs as $index => $job)
                                    <a class="dropdown-item text-dark" href="/categories/{{$job['id']}}">{{$job['job_name']}}</a>
                                    @endforeach
                                </div>
                            </div>
                        

                        <!-- <div class="container">

                            <h1>Choose your career </h1>
                            <input class="typeahead form-control" style="margin:0px auto;width:300px;" type="text">
                        </div>
                        <script type="text/javascript">
                            var path = "{{ route('autocomplete') }}";
                            $('input.typeahead').typeahead({
                                source: function(query, process) {
                                    return $.get(path, {
                                        query: query
                                    }, function(data) {
                                        return process(data);
                                    });
                                }
                            });
                        </script> -->



                    </form>
                </div>
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
@endsection