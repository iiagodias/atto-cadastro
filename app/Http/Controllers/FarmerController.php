<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmerController extends Controller
{
    public function index()
    {
        return view('features.farmers.list');
    }

    public function create()
    {
        return view('features.farmers.form');
    }
}
