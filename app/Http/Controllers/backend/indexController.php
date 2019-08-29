<?php

namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class indexController extends Controller
{
    function getIndex() {  
        return view('backend.index');
     }
     function logout()
     {
         Auth::logout();
         return redirect('login');
     }
}
