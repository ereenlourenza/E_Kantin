<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SuntingProductController extends Controller
{
    public function index()
    {
        return view('Admin.SuntingProduct');
    }
}
