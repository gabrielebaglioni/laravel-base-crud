<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function index(){
      
        $comics = Comic::get();
        return view('home', compact('comics'));
    }
}
