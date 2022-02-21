<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacantController extends Controller
{
    public function __construct() {
        $this->middleware(['auth','verified']);
    }
    public function create() {
        return view('vacant.create');
    }
}
