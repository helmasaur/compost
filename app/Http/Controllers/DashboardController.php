<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class DashboardController extends Controller
{
    public function index()
    {
        $modules = Module::orderBy('order', 'desc')->get();
        return view('dashboard.index')->with(['modules' => $modules]);
    }
}
