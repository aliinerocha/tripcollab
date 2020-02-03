<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComunidadesController extends Controller
{
    public function show($id) {
        return view('comunidades.show', compact('id'));
    } 
}
