<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //Functie 
    public function store(Request $request){
        Subscribe::create($request->all());
        return redirect()->back()->with('success','Inregistrarea reusita!');
    }
}
