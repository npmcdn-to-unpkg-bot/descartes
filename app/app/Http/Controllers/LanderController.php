<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LanderController extends Controller
{
    public function index() 
	{
		return view('index');	
	}

	public function search() 
	{
	
	}
}
