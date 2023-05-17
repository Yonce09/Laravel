<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Userinfo;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    public function index () {
        $userinfo=Userinfo::all();
        return $userinfo;
    }//
    public function store(Request $request){
        $user = new Userinfo();
        $user->name = $request->input('name');
        $user->address = $request->input('address');
        $user->age = $request->input('age');
        $user->save();
    return 200;
    }
}
