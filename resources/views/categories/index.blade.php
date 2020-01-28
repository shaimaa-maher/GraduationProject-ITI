@extends('layouts.app')

@section('content')
<!-- <br><br><br><br> -->

<section class="site-section services-section bg-light block__62849" id="services-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center" data-aos="fade">
      <h2 class="section-title mb-3">Categories</h2>
      </div>
    </div>

    <div class="row">
      @foreach($categories as $index => $value)
      <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

        <a href="{{route('contents.index',['cat_id' => $value['id'] ])}}" class="block__16443 text-center d-block">
          <span class="custom-icon mx-auto"><img src="/images/back.png" width="85" height="85" class="icon-line-tools d-block"></span>
          <h3>{{$value['category_name']}}</h3>
        </a>

      </div>
      @endforeach
    </div>

  </div>
</section>



<br><br><br><br><br>
@endsection