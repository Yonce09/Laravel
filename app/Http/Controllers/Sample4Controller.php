<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sample4Controller extends Controller
{
    public function index4() { 
        return view('home4');
    }   
    public function test(Request $request){
        $score = $request->textbox1;
        return view('home5',compact('score')); 
    }   //
    }
        
    
