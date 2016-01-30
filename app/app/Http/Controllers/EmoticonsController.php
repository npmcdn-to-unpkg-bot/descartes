<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Emoticon;

class EmoticonsController extends Controller
{
    public function index()
	{		
		$emoticons = Emoticon::all();	
		return view('emoticons.index', compact('emoticons'));
	}
}
