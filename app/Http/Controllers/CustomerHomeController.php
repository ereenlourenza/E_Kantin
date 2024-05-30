<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomerHomeController extends Controller
{
    public function home()
    {
        // Add your logic here
        return view('Customer.home'); // or whatever view you want to return
    }
    public function handlePost(Request $request)
    {
        // Handle the POST request data
        // Perform any necessary processing, such as form submissions, etc.

        // Optionally pass data to the view
        $data = $request->all();

        // Redirect or return a response
        return view('customer.login', ['data' => $data, 'message' => 'POST request received']);
    }
}
