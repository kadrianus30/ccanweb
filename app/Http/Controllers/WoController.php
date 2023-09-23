<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WoController extends Controller
{
    public function create()
    {
        $studentList = "tes";
        return view('wo.create');
    }
}
