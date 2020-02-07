<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Career;
use App\Category;
use App\Content;
use App\career_category;
use App\category_content;


class CareerController extends Controller
{
    public function index()
    { 
        return view('admin.control.control');
    }

                                                    //////////////////
                                                    //add new career//
                                                    /////////////////


    public function add()
    { 
        return view('admin.control.add_career',[
            'jobs'=> Career::all(),
            'categories'=>Category::all(),
            'contents'=>Content::all(),
        ]);
    }

    //store career
    public  function storeCareer(Request $request)
    { 
        
        Career::create([
            'job_name' => $request->job_name,
            ]);
            
        return redirect()->route('control.Add')->with('careermessage',$request->job_name." ".' Career added!');
    }
    

    //store category
    public  function storeCategory(Request $request)
    { 
        // dd($request->image);
        if (!isset($request->image)) {
            $path="/images/avatar.png";
        }else{

            $path = $request->file('image')->store('images');
            $request->image->move(public_path('images'), $path);
        }
        
        Category::create([
            'category_name' => $request->category_name,
            'image' => $path,
            ]);

            return redirect()->route('control.Add')->with('categorymessage',$request->category_name." ".' Category added!');


    }

    

    //store content
    public  function storeContent(Request $request)
    { 
        if (!isset($request->image)) {
            $path="/images/avatar.png";
        }else{

            $path = $request->file('image')->store('images');
            $request->image->move(public_path('images'), $path);
        }
        
        Content::create([
            'content_name' => $request->content_name,
            'content_details' => $request->content_details,
            'image' => $path,
            'links'=>$request->links
            ]);

            return redirect()->route('control.Add')->with('contentmessage',$request->content_name." ".' Content added!');
    }

                                                    ///////////////////////////////////////
                                                    //assign career - category - content//
                                                    /////////////////////////////////////                    
   

    //choose from the drop dwon menu and store in the input

    public function AssignCareerCategory(Request $request)
    {
        //dd($request);
        career_category::create(
           [ 'career_id' => $request->career_id ,
             'category_id' => $request->career_category_id,
           ]);
           return redirect()->route('control.Add')->with('careercategorymessage',$request->career_id.' assigned to'.$request->career_category_id);

    }


    public function AssignCategoryContent(Request $request)
    {
        //dd($request);
        category_content::create(
           [ 'category_id' => $request->category_id ,
             'content_id' => $request->category_content_id,
           ]);
           return redirect()->route('control.Add')->with('categorycontentmessage',$request->category_id.' assigned to'. $request->category_content_id);
  
    }


                                            ////////////////////////////////////////////////////
                                            //        edit career - category - content       //
                                            //////////////////////////////////////////////////
                                            
                                            
   
    public function edit()
    { 
        return view('admin.control.edit');
    }


    public function modifyMainTables()
    { 
        return view('admin.control.modify_main_tables',[
            'jobs'=> Career::all(),
            'categories'=>Category::all(),
            'contents'=>Content::all(),
        ]);
    }

    public function ModifyCareer(Request $request)
    {
       $id=$request->job_id;
       $career = Career::find($id);
       $career->update(
           ['job_name' => $request->job_name,]
       );
       
       return redirect()->route('ModifyMain')->with('careerModifymessage','Career Modified Successfully !');

    }



    public function ModifyCategory(Request $request)
    {  
       $path = $request->file('image')->store('images');
       $request->image->move(public_path('images'), $path);

       $id=$request->cat_id;
       $category = Category::find($id);
       $category->update(
           [
            'category_name' => $request->category_name,
            'image'=>$path
           ]
       );
       
       return redirect()->route('ModifyMain')->with('categorymodifymessage','Category Modified Successfully !');

    }


    public function ModifyContent(Request $request)
    {  
       $path = $request->file('image')->store('images');
       $request->image->move(public_path('images'), $path);

       $id=$request->con_id;
       $content = Content::find($id);
       $category->update(
           [
            'content_name' => $request->category_name,
            'content_details' =>$request->content_details,
            'links'=>$request->links,
            'image'=>$path
           ]
       );
       
       return redirect()->route('ModifyMain')->with('contentmodifymessage','Content Modified Successfully !');

    }

  
}
