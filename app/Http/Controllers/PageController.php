<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function contacts(){
        return view('contacts');
    }
}
