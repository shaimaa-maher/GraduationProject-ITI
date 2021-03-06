<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Category;


class ContentController extends Controller
{    
    public function index($cat_id)
    {
         $category = Category::find($cat_id);
         
        return view('contents.index', [
            'contents' => $category->contents,
            'categories' =>$category,
              
           
        ]);
    }

    public function view($content)
    { 

        return view('contents.view',[
            'course'=> Content::find($content),
            
        ]);
    }
}
