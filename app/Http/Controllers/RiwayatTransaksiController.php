<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RiwayatTransaksiController extends Controller
{
    public function index()
    {
        return view('Customer.RiwayatTransaksi');
    }
}
