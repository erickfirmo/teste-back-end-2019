<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function doc()
    {
        return redirect('https://documenter.getpostman.com/view/9123887/SzzoZuxn?version=latest');
    }
    
}
