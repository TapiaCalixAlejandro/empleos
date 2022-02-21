<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacantController extends Controller
{
    public function create() {
        return view('vacant.create');
    }
}
