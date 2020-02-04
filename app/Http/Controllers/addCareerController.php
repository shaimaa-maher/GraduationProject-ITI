<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use App\Category;
use App\Content;

class addCareerController extends Controller
{

    //store career
    public  function storeCareer(Request $request)
    { 
        
        Career::create([
            'job_name' => $request->job_name,
            ]);
            
        return redirect()->route('addcareer')->with('careermessage',$request->job_name." ".' Career added!');
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

            return redirect()->route('addcareer')->with('categorymessage',$request->category_name." ".' Category added!');


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

            return redirect()->route('addcareer')->with('contentmessage',$request->content_name." ".' Content added!');
    }


    public function index()
    { 
        return view('admin.add_career',[
            'jobs'=> Career::all(),
            'categories'=>Category::all(),
            'contents'=>Content::all(),
        ]);
    }

    //choose from the drop dwon menu and store in the input

    public function AssignCareerCategory(Request $request)
    {
        //dd($request);
        Category::create(
           [ 'career_id' => $request->career_id ,
             'category_id' => $request->career_category_id,
           ]);
           return redirect()->route('add.Career')->with('careercategorymessage',$request->career_id.' assigned to'.$request->career_category_id);
        


    }

    
}
