<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\City;
// use DB;

class HomeController extends Controller
{
    
    public function getHomeInfo()
    {		
        return view('frontend.layout.home');
    }
}
