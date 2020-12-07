<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    //マップの表示
   public function index(Request $request)
   {
       return view('map.map2');
   }
}