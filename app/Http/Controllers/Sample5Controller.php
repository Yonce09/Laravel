<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sample5Controller extends Controller
{
    public function index5() { 
        return view('home6');
    }
    
    public function test2(Request $request){
        $score2 = $request->textbox2;
        return view('home7',compact('score2')); 
    }   //
}
