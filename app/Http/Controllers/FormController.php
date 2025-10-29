<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show(){
        return view("form");
    }

    public function handleForm(RegisterRequest $request){
        $request->validate();
        return redirect()->back()->with("sucsses","touut est bien");
    }
}
