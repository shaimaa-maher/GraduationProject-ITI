@extends('layouts.app')

@section('content')

<div class="row m-auto no-gutters">
    <div class="col-6">
        <form>
            <fieldset class="add-career">
                <legend>Career:</legend>
                <p>Job Name:</p> <input name="job_name" type="text"><br><br>
                <input type="submit" class="btn btn-info " value="Add Career">
            </fieldset>
        </form>
    </div>


    <div class="col-6">
        <form>
            <fieldset class="add-career  ">
                <legend>Category:</legend>
                <p>category Name:</p> <input name="category_name" type="text"><br><br>
                <p>category image:</p> <input name="image" type="file"><br><br>
                <input type="submit" class="btn btn-info " value="Add Category">
            </fieldset>
        </form>
    </div>
</div>


<div class="row m-auto no-gutters ">
    <div class="col-6 ">
        <form>
            <fieldset class="add-career-content add-career">
                <legend>Content:</legend>
                <p>Content Name:</p> <input name="content_name" type="text"><br><br>
                <p>Content details:</p> <input name="content_details" type="text"><br><br>
                <p> Content links:</p> <input name="links" type="text"><br><br>
                <p>Content image:</p> <input name="image" type="file"><br><br>
                <input type="submit" class="btn btn-info " value="Add Content">
            </fieldset>
        </form>
    </div>
</div>

<br><br><br>
@endsection