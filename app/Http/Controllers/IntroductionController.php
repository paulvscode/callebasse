<?php

namespace App\Http\Controllers;

class IntroductionController extends Controller
{
    public function index() {
        return view('intro_first_part');
    }

    public function second() {
        return view('intro_second_part');
    }

    public function heroesSelection() {
        return view('heroes_selection');
    }
}
