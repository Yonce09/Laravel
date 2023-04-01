<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sample3Controller extends Controller
{
    public function index3() { 
        return view('home3');
    }   //
    public function store(Request $request){
        dump($request->name);
        dump($request->mail);
        dump($request->tell);
        dump($request->message);
        dump($request->contact);
    return redirect('sample3'); 
    }
}
