<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;
class HomeworkController extends Controller
{
    public function create() {
        return view('homework');
    }
    
    public function store(Request $request){
        $user = new Userinfo();
        $user->name = $request->input('name');
        $user->address = $request->input('address');
        $user->age = $request->input('age');
        $user->save();
        return view('homework2', compact('user'));
    }

    public function index() {
        $user = Userinfo::get();
        return view('homework3', compact('user'));
    }

    public function edit($id) {
    	$user= Userinfo::find($id);
        return view('homeworkedit',compact('user'));
    }
    public function update(Request $request){
            $user =Userinfo::find($request->id);
            $user->name = $request->input('name');
            $user->address = $request->input('address');
            $user->age = $request->input('age');
            $user->save();
        return view('homework4', compact('user'));
    }   
    public function destroy($id) {
        $user= Userinfo::find($id);
        return view('homeworkdelete',compact('user'));
    }

    public function destroy2(Request $request){
        $user =Userinfo::find($request->id);
        $user->delete();
        return view('homework5',compact('user'));
    }

    public function index2(Request $request){
        $keyword = $request->input('keyword');
        $query = Userinfo::query();

        if(!empty($keyword)) {
            $query->where('id', 'LIKE', "%{$keyword}%");
        }
        $user = $query->get();

        return view('homework3', compact('user','keyword'));
    }
    //
}
