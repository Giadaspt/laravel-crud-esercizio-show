<?php

namespace App\Http\Controllers;

use App\Pasta;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $pastas = Pasta::all();

        return view('home', compact('pastas'));
    }
}
