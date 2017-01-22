<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page404;

class Page404Controller extends Controller
{
    public function index()
    {
        return view('page404');
    }
}
