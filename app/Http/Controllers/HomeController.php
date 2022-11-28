<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function actHome(Request $req)
    {
    	return view('dashboard.dashboard',['usuario'=>$req->usuario]);
    }
}
