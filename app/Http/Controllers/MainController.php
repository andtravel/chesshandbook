<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function openings()
    {
        return view('openings');
    }

    public function middlegame()
    {
        return view('middlegame');
    }

    public function endgame()
    {
        return view('endgame');
    }

    public function history()
    {
        return view('history');
    }

    public function rules(){
        return view('rules');
    }

    public function notation(){
        return view('notation');
    }

    public function italiangame(){
        return view('italiangame');
    }

    public function devpage()
    {
        return view('devpage');
    }

}
