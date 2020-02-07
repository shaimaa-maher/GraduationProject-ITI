@extends('layouts.app')

@section('content')
<h1 class="career-title"> Modify Main Tables </h1>

<div class="row m-auto  no-gutters">
    <div class="col-6">
        <form method="POST" action="/Modify/career">
            @csrf
            <fieldset class=" add-career">
                <legend>Modify Career:</legend>
                <select name="job_name" class="form-control ModifyCareer">
                    @foreach($jobs as $index => $job)
                    <option value="{{$job->id}}" selected>{{$job->job_name}}</option>
                    @endforeach
                </select>
                <input type="text" id="job_id" name="job_id" hidden>
                <p>Job Name:</p> <input name="job_name" placeholder="new job name" type="text"><br><br>
                <input type="submit" class="btn btn-info " value="Modify Career">
            </fieldset>
            @if(session()->has('careerModifymessage'))
            <div class="alert alert-success">
                {{ session()->get('careerModifymessage') }}
            </div>
            @endif
        </form>
    </div>

    <div class="col-6">
        <form method="POST" action="/Modify/category" enctype="multipart/form-data">
            @csrf

            <fieldset class="add-career  ">
                <legend>Modify Category:</legend>
                <select name="category_name" class="form-control ModifyCategory">
                    @foreach($categories as $index => $cat)
                    <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                    @endforeach
                </select>
                <input type="text" id="cat_id" name="cat_id" hidden>

                <p>category Name:</p> <input name="category_name" type="text" placeholder="new category name"><br><br>
                <p>category image:</p> <input name="image" type="file"><br><br>
                <input type="submit" class="btn btn-info " value="Modify Category">
            </fieldset>
            @if(session()->has('categorymodifymessage'))
            <div class="alert alert-success">
                {{ session()->get('categorymodifymessage') }}
            </div>
            @endif
        </form>
    </div>

</div>

<div class="row m-auto no-gutters ">
    <div class="col-6 ">
        <form method="POST" action="/Modify/content" enctype="multipart/form-data">
            @csrf

            <fieldset class="add-career-content add-career">
                <legend>Content:</legend>
                <select name="content_name" class="form-control ModifyContent">
                    @foreach($contents as $index => $con)
                    <option value="{{$con->id}}">{{$con->content_name}}</option>
                    @endforeach
                </select>
                <input type="text" id="con_id" name="con_id" hidden>

                <p>Content Name:</p> <input name="content_name" type="text"><br><br>
                <p>Content details:</p> <input name="content_details" type="text"><br><br>
                <p>Content links:</p> <input name="links" type="text"><br><br>
                <p>Content image:</p> <input name="image" type="file"><br><br>
                <input type="submit" class="btn btn-info " value="Modify Content">
            </fieldset>
            @if(session()->has('contentmodifymessage'))
            <div class="alert alert-success">
                {{ session()->get('contentmodifymessage') }}
            </div>
            @endif
        </form>
    </div>
</div>
<br><br><br><br>

@endsection