<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function create(){
        return view('create');
    }


    public function store(Request $input){

        $this->validate($input,[
           "title"   => "required|string",
           "content" => "required|max:50",
           "image"   => "required|mimes:csv,txt,xlx,xls,pdf"
        ]);

       $imageName = time().'.'.$input->image->extension();
       $input->image->move(public_path('uploads'),$imageName);

    }

     public function index(Request $input){

        $data = array($input,['title' , 'content' , 'image']);

        return view('index' , compact('data'));
     }


}
