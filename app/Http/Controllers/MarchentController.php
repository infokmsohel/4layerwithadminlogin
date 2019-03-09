<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarchentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:marchent');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('marchent.home');
    }
}
