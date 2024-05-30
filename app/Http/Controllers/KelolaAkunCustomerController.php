<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KelolaAkunCustomerController extends Controller
{
    public function index()
    {
        return view('Admin.KelolaAkunCustomer');
    }
}
