<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    function getIndex() { 
       return view('frontend.index');
    }

    function getAbout() { 
        return view('frontend.about');
     }


    function getContact() { 
      return view('frontend.contact');
    }
}
