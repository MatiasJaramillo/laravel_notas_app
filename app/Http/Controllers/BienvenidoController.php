<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidoController extends Controller
{
    //
    public function welcome() {
        return view("welcome");
    }
}
