<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siswaController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public Function index()
    {
    	return " hello selamat datang";
    }
}
