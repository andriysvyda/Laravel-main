<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Termwind\style;

class CVController extends Controller
{

    public function cv() {
            return view('pages.CV');
    }
}

