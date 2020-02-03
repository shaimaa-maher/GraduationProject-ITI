@extends('layouts.app')

@section('content')
<h1 class="career-title"> ADD A CAREER</h1>
<div class="row m-auto no-gutters">
    <div class="col-6">
        <form method="POST" action="/add-career">
            @csrf
            <fieldset class="add-career">
                <legend>Career:</legend>
                <p>Job Name:</p> <input name="job_name" type="text"><br><br>
                <input type="submit" class="btn btn-info " value="Add Career">
            </fieldset>
            @if(session()->has('careermessage'))
            <div class="alert alert-success">
                {{ session()->get('careermessage') }}
            </div>
            @endif
        </form>

    </div>


    <div class="col-6">
        <form method="POST" action="/add-career/category" enctype="multipart/form-data">
            @csrf

            <fieldset class="add-career  ">
                <legend>Category:</legend>
                <p>category Name:</p> <input name="category_name" type="text"><br><br>
                <p>category image:</p> <input name="image" type="file"><br><br>
                <input type="submit" class="btn btn-info " value="Add Category">
            </fieldset>
            @if(session()->has('categorymessage'))
            <div class="alert alert-success">
                {{ session()->get('categorymessage') }}
            </div>
            @endif
        </form>
    </div>
</div>


<div class="row m-auto no-gutters ">
    <div class="col-6 ">
        <form method="POST" action="/add-career/content" enctype="multipart/form-data">
            @csrf

            <fieldset class="add-career-content add-career">
                <legend>Content:</legend>
                <p>Content Name:</p> <input name="content_name" type="text"><br><br>
                <p>Content details:</p> <input name="content_details" type="text"><br><br>
                <p> Content links:</p> <input name="links" type="text"><br><br>
                <p>Content image:</p> <input name="image" type="file"><br><br>
                <input type="submit" class="btn btn-info " value="Add Content">
            </fieldset>
            @if(session()->has('contentmessage'))
            <div class="alert alert-success">
                {{ session()->get('contentmessage') }}
            </div>
            @endif
        </form>
    </div>
</div>

<h1 class="career-title mt-5"> ASSIGNMENT</h1>

<div class="row m-auto no-gutters">
    <div class="col-6">
        <form method="POST" action="/add-career">
            @csrf
            <fieldset class="add-career">
                <legend>Career-category:</legend>
                <p>assign the career </p> <input name="job_name" type="text">
                <p>To </p>
                <p>the category</p> <input name="job_name" type="text">

                <input type="submit" class="btn btn-info ml-2 " value="Assign">
            </fieldset>
            @if(session()->has('careermessage'))
            <div class="alert alert-success">
                {{ session()->get('careermessage') }}
            </div>
            @endif
        </form>

    </div>
    <div class="col-6">
        <form method="POST" action="/add-career">
            @csrf
            <fieldset class="add-career">
                <legend>Category-content:</legend>
                <p>assign the category </p> <input name="job_name" type="text">
                <p>To </p>
                <p>the content</p> <input name="job_name" type="text">

                <input type="submit" class="btn btn-info ml-2  " value="Assign">
            </fieldset>
            @if(session()->has('careermessage'))
            <div class="alert alert-success">
                {{ session()->get('careermessage') }}
            </div>
            @endif
        </form>
    </div>
</div>



<br><br><br>
@endsection