<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\input_types;

class Input_typesController extends Controller
{
     public function get_types()
    {
        //
      return input_types::all();
        // return view('index',compact('types'));
         //return view('index',compact('types'));
       return view('input_types');
    }
}
