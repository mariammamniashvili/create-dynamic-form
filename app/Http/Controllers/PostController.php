<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\input_types;
use App\input_list;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $type = input_types::all()->toArray();
       $input_lists = input_list::all()->toArray();
         
       return view('posts/index',compact('type','input_lists'));
    }

     

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $input_lists = input_list::all()->toArray();
         return view('posts.forms',compact('input_lists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
    public function store(Request $request)
    {
   
        $this->validate($request,[
        'input_name'=>'required',
        'type'=>'required'

        ]);
        $count = count($request->input_name);

        for ($i=0; $i < $count; $i++) { 
        $input_list=new input_list;
        $input_list->input_name=$request->input('input_name')[$i];
        $input_list->type_name=$request->input('type')[$i];
        $res=$input_list->save();
        }
        return redirect('posts/create')->with('success','Post is created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
     public function delete()
    { 
        input_list::truncate();
        
         
        return redirect('posts')->with('success','Post is created');

     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       
    }
}
