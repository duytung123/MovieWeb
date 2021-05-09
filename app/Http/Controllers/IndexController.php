<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class IndexController extends Controller
{
    public function index()
    {
    	$data['listFilm'] = Movie::all();
    	return view('index.index',$data);
    }
}
