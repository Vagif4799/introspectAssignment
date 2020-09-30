<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementsPageController extends Controller
{
    public function show() {
        return view('elements');
    }
}
