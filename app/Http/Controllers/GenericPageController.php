<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericPageController extends Controller
{
    public function show() {
        return view('generic');
    }
}
