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
                            <input type="text" id="filter" name="Searchbar" class="form-control" placeholder="What are you looking for?">
                            <!--  <span id="filter-count"></span>-->
                        </fieldset>
                    </form>

                    <div class="col-lg-12 col-xl-2 ml-auto text-right">
                        <input type="submit" class="btn text-white btn-primary" value="Search" name="searchbutton">
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<br><br><br><br>
@endsection