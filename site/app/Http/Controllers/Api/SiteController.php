<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function doc()
    {
        return view('doc');
    }
    
}
