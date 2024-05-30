<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BerandaAdminController extends Controller
{
  public function index() {
    return view('Admin.BerandaAdmin');
  }
  
}
