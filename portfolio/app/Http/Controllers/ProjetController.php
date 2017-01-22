<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;

class ProjetController extends Controller
{
    public function index()
    {
        return view('projet');
    }
}
