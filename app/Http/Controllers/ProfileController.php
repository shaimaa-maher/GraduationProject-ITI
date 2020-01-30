<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profiles.index');
    }   


    
    public function edit()
    {
          return view('profiles.edit');
        // Get the currently authenticated user's ID...Auth::id()
        
        // $post = Post::find($id);
        // return view('posts.edit', ['post'=>$post]);

        
      

    //     return view('profiles.edit'
    //     ,[
            
    //         'id'=>Auth::id()
    //     ]
    // );
          
           
    }
    
    
    public function update(Request $request)
    {   
        // dd(User::find( Auth::id()));
        // $request->user();
        // dd($request);
        $path = $request->file('image')->store('images');
        $request->image->move(public_path('images'), $path);

        $user_id =  Auth::id();
        $user_profile = User::find($user_id);
        $user_profile->update([
           'first_name'=>$request->first_name,
           'last_name'=>$request->last_name,
           'email'=>$request->email,
           'country'=>$request->country,
           'birthdate'=>$request->birthdate,
           'password'=>$request->password,
           'image'=>$path,
           'gender'=>$request->gender]);
        return redirect()->route('profiles.index');
    }



}