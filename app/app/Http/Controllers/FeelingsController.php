<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Feeling;

class FeelingsController extends Controller
{
    public function index() 
	{
		$feelings = Emoticon::take(1)->get();	
		return view('feelings.index', compact('feelings'));
	}
}
