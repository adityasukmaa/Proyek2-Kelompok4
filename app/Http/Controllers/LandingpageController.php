<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::LANDINGPAGE;

    public function index()
    {
        return view('landingpage.index');
    }

    public function __construct()
    {
        $this->middleware('guest');
    }
}
