<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function __construct()
    {
//
    }
    public function index()
    {

        return view('site.layouts.registration');
    }
}
