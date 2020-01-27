<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Content;
use App\Career;




class CategoryController extends Controller
{
    
    // public function index()
    // {
       
    //     return view('categories.index', [
    //         'categories' => Category::all(),
          
    //     ]);
    // }


    public function index($career_id)
    {
         $career = Career::find($career_id);
        return view('categories.index', [
            'categories' => $career->categories
              
          
        ]);
    }
}
