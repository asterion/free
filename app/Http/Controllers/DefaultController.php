<?php

namespace App\Http\Controllers;

class DefaultController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Homepage
     *
     * @return Response
     */
    public function index()
    {
        return view('default/index', ['name' => 'James']);
    }

}
