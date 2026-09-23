<?php

namespace App\Http\Controllers;

use App\Models\Alumni;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::all();

        return view('alumni', [
            'alumni' => $alumni,
        ]);
    }
}
