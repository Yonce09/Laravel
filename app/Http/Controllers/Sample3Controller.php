<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class Sample3Controller extends Controller
{
    public function index3() { 
        return view('home3');
    }   //
    public function index() {
        $contacts = Contact::get();
        return view('index', compact('contacts'));
    }
    public function edit($id)
    {
    	$contact= Contact::find($id);
        return view('edit',compact('contact'));
    }
    public function update(Request $request){
            $contact =Contact::find($request->id);
            $contact->name = $request->name;
            $contact->mail = $request->mail;
            $contact->tel = $request->tel;
            $contact->message = $request->message;
            $contact->contact = $request->contact;
            $contact->save();
        return redirect('sample30');
    }   
    public function store(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->mail = $request->mail;
        $contact->tel = $request->tel;
        $contact->message = $request->message;
        $contact->contact = $request->contact;
        $contact->save();
        return redirect('sample3'); 
    }
}
