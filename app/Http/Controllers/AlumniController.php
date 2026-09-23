<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index(Request $request)
    {
        $query = Alumni::query();

        if ($request->filled('batch_year')) {
            $query->where('batch_year', $request->input('batch_year'));
        }

        $alumni = $query->orderBy('name')->get();

        $batches = Alumni::select('batch_year')
            ->distinct()
            ->orderByDesc('batch_year')
            ->pluck('batch_year');

        return view('alumni', [
            'alumni' => $alumni,
            'batches' => $batches,
            'selectedBatch' => $request->input('batch_year'),
        ]);
    }
}