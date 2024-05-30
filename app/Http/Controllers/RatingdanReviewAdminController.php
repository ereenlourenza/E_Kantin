<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RatingdanReviewAdminController extends Controller
{
    public function index()
    {
        return view('Admin.RatingdanReview');
    } 
}
