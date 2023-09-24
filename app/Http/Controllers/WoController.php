<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WoController extends Controller
{
    public function index()
    {
        $studentList = "tes";
        return view('wo.index');
    }
    public function create()
    {
        $studentList = "tes";
        return view('wo.create');
    }
}
