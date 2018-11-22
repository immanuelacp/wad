<?php

namespace App\Http\Controllers;

use App\Villa;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $villas = Villa::take(6)->get();
        return view('index',compact('villas'));
    }
}
