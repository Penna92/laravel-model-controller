<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // @dd($movies);
        return view('home', compact('movies'));
    }
    public function findMovieById($id)
    {
        $movies = Movie::find($id);
        // @dd($movies);
        return view('detail', compact('movies'));
    }
}
