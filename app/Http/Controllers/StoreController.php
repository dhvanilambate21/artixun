<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class StoreController extends Controller
{
    function store(Request $request){
        // return "This is store controller";
        $validated = $request->validate([
            'username' => 'required|unique:contacts|max:255',
            'email' => 'required',
            'project_description' => 'required',
            'doc_file' => 'required',
            'intrest' => 'required',
            'budget' => 'required'

        ]);

        $contact = new contact;
        $contact->username=$request->input('username');
        $contact->email=$request->input('email');
        $contact->project_description=$request->input('project_description');
        $contact->intrest=json_encode($request ->intrest);   
        $contact->budget=$request->input('budget');
        
        if($request->hasfile('doc_file'))
        {
            $file = $request->file('doc_file');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('frontend/uploads/',$filename);
            $contact->doc_file=$filename;
        }
        $contact->save();     
        return redirect()->back()->with('msg','Submitted successfully');
        // dd($req);
        dd($request->all());
        // exit();
    }
}
