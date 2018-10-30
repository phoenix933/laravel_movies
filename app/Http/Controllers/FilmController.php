<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
		$this->middleware('role:admin');
    }
    public function films()
    {
        return view('admin/films/list');
    }
}
