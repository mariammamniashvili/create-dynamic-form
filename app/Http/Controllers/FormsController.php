<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
     public function index()
    {
        
       
       $input_lists = input_lists::all()->toArray();
       
       return view('posts.forms',compact('input_lists'));
    }
}
