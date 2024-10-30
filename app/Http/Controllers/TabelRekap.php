<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use Illuminate\Http\Request;

class TabelRekap extends Controller
{
    public function index()
    {
        $kehadiran = Kehadiran::all();

        return view('about', compact('kehadiran'));
    }
}
