<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Emoticon;

class EmoticonsController extends Controller
{
	private $COUNT = 2;	

    public function index()
	{			
		$emoticons = Emoticon::take(2)->get();		
		return view('emoticons.index', compact('emoticons'));
	}
}
