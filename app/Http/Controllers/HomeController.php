<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
   $data=posts::all();
   return view('Home',compact('data'));
   }
}
