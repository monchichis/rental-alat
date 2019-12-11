<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('part.index');;
    }
    public function content(){
        return view('part.content');;
    }
    public function footer(){
        return view('part.footer');;
    }
}
