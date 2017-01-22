<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competence;

class CompetenceController extends Controller
{
    public function index()
    {
        return view('competence');
    }
}
