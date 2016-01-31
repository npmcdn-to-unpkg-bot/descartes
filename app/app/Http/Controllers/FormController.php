<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
	public function submit(Request $request) 
	{
		$params = $request->all();
		$url = $this->$params['method']($params);
		return redirect('/unimpressed/1');
	}
	
	public function search($params) 
	{
		return '/' . $params['feel'] . '/1';
	}
}
