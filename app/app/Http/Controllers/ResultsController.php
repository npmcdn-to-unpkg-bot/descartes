<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Emoticon;

class ResultsController extends Controller
{
	private $COUNT = 2;

    public function index($feeling, $page) 
	{	
		$emoticons = Emoticon::take($this->COUNT)->where('feeling', $feeling)->get();
		return view('results.index', compact('emoticons'));
	}
}
