<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Emoticon;

class ResultsController extends Controller
{
    public function index() 
	{
		$emoticons = Emoticon::take(1)->get();
		return view('results.index', compact('emoticons'));
	}
}
