<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermConditionController extends Controller
{
    public function index(Request $request)
    {
        return view('termcondition');
    }
}
