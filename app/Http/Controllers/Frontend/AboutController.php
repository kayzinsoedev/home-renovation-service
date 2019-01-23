<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AboutController extends Controller
{
    public function getInfo()
    {	
    	$infos = "WE SPECIALISE IN RESIDENTIAL, COMMERCIAL, AND OFFICE RENOVATION";
        return view('frontend.section.about_section', compact('infos'));
    }
}
