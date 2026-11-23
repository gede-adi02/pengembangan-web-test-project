<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GedeController extends Controller
{
    public function index()
    {
        return view('gede');
    }
}