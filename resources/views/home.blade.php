@extends('layouts.app')

@section('content')
<!-- HOME -->
<section class="home-section section-hero overlay slanted" id="home-section">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
                    <form method="post" id="live-search" action="coursesview.html">
                        <h1 data-aos="fade-up">Find Your <span class="typed-words"></span></h1>
                        <p></p>
                        <fieldset>
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Choose your career </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    @foreach($jobs as $index => $job)
                                    <a class="dropdown-item text-dark" href="/categories/{{$job['id']}}">{{$job['job_name']}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection