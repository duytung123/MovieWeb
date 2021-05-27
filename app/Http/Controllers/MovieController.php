<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
    	
    	$movie = Movie::all();
    	return response()->json($movie,200);	
    }
    public function getId($movie_Id)
    {
    	$movie = Movie::find($movie_Id);
    	return response()->json([$movie],200);
    }
   
}
