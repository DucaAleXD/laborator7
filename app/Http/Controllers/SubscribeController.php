<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;
use illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    //Functie 
    public function store(Request $request){
        Subscribe::create($request->all());
        $subscribe=new Subscribe();
        $subscribe->name=$request->name;
        $subscribe->email=$request->email;

        Mail::to($request->email)->send(
            new SubscribeUser($request->all())
        );
        return redirect()->back()->with('success','Inregistrarea reusita!');
    }
}
