<?php

namespace App\Http\Controllers;

use LaraFlash;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public  function index()
    {
        LaraFlash::add()->content('hello world')->priority(6)->type('info');
        LaraFlash::snackbar('click to continue');
        LaraFlash::success('Yah worked');
        LaraFlash::danger('Wrong');
        return view('home');
    }
}
