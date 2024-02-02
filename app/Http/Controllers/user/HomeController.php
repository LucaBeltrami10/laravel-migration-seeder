<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('pages.home');
    }
}