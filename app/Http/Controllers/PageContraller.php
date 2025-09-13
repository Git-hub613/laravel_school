<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class PageContraller extends Controller
{
   public function home () {
    $companies = Company::all();
    return view('home',compact('companies'));
}

public function about(){
    return view("about");
}

public function contact(){
    return view("contact");
}

public function service(){
    return view("service");
}
}
