<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{

    public function index($id)
    {
        if (isset($id)) {
            $module = Module::find($id);
            return view('module.index')->with(['module' => $module]);
        }
    }
}
