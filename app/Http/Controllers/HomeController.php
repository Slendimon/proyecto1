<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Socio;
class HomeController extends Controller
{
    public function index()
    {
        $socios = Socio::all();
        
        return view('welcome',compact('socios'));

    }
}
