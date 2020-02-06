@extends('layouts.app')

@section('content')

<section class="site-section block__62272" id="portfolio-section">
    <div class="container">
        <div id="posts" class="row no-gutter">
            <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                <a href="/control/add" class="item-wrap">
                    <span class="icon-add"></span>
                    <img class="img-fluid" src="images/add.png">
                </a>
            </div>
            <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                <a href="/Edit" class="item-wrap">
                    <span class="icon-add"></span>
                    <img class="img-fluid" src="images/edit.png">
                </a>
            </div>

            <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                <a href="#" class="item-wrap">
                    <span class="icon-add"></span>
                    <img class="img-fluid" src="images/delete.png">
                </a>
            </div>
        </div>
    </div>
</section>


@endsection