@extends('layouts.app')

@section('content')
 
<section class="site-section block__18514" id="next-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 mr-auto">
        <div class="border p-4">
          <img src="{{URL::to('/')}}/images/{{$course['image']}}" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-8">
        <h2 class="mb-4">{{$course['content_name']}}</h2>
        <p>{{$course['content_details']}}</p>
        <p>Sed odio temporibus quaerat laboriosam dicta ipsam eligendi deserunt architecto, aliquam in totam provident praesentium aperiam, id impedit aut delectus mollitia doloribus nostrum numquam tempore ullam reprehenderit nesciunt cumque veniam.</p>
        <p>Officia mollitia deserunt vel expedita deleniti iure eius illum dolor optio tempora! Fuga, voluptates omnis velit neque. Rerum aperiam consequatur vero, nulla dolores a. Sed, non veniam maiores recusandae iure.</p>
        <p>Nobis officia tempore porro incidunt quaerat commodi numquam exercitationem laboriosam deserunt, error excepturi et delectus quis explicabo repellendus obcaecati iusto. Delectus magni ducimus illo! Fugit quaerat debitis deserunt facere reiciendis!</p>
      </div>
    </div>
  </div>
</section>
<br><br><br><br>
@endsection