<?php

namespace Workhouse\Http\Controllers;

use Illuminate\Http\Request;
class SearchController extends Controller
{
	public function getResults()
	{
		return view('search');
	}

}
