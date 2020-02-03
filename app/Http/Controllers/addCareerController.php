<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use App\Category;
use App\Content;

class addCareerController extends Controller
{
    public  function storeCareer(Request $request)
    { 
        
        Career::create([
            'job_name' => $request->job_name,
            ]);
            
        return redirect()->route('addcareer')->with('careermessage',$request->job_name." ".' Career added!');
    }
    
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

}
