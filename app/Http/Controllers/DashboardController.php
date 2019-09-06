<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller // ①
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    public function index()
    {
        // return view('home');
        return view('dashboard'); // ②
    }
}
