<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;

class PagesController extends Controller
{
    public function index(){

        $posts =  post::orderBy("id", "desc")->take(3)->get();
        return view('pages.index')->with('posts', $posts);
      
        //return view('pages.index');
    }


   public function about(){
        
    return view('pages.about');

    }
    public function services(){
        
        return view('pages.services');
    
    }
    public function portfolio(){
        
        return view('pages.portfolio');
    
    }
    public function contact(){
        
        return view('pages.contact');
    
    }
   
   

}


