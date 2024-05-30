<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PembayaranController extends Controller
{
   public function index()
    {
        return view('Customer.pembayaran');
    } 
}
