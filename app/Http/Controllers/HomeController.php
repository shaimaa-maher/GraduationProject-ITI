<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        //  $career = Career::select("id","job_name");
        // dd($career);
        return view('home',[
            'jobs'=> Career::all(),
            
        ]);
    }


   
    public function autocomplete(Request $request)
    {
        $data = Career::select("job_name as name")->where("job_name","LIKE","%{$request->input('query')}%")->get();
        return response()->json($data);
    }



}
