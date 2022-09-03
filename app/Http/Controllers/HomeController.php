<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
       $userType = Auth::user()->userType;
       if($userType == '1')
       {
          return view('admin');
       }
       elseif($userType == '2')
       {
          return view('secretaria');
       }
       else
       {
         return view('editor');
       }
    }
}
