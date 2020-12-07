<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Customer;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(Request $request)
    {
        $items = Language::all();
        return view('language.index', ['items' => $items]);
    }
}
