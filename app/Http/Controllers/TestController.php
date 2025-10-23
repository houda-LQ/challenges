<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
{
    return "Je suis le contrôleur TestController";
}
public function show()
{
    return view('accueil');
}

}
