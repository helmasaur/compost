<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Show;

class ModuleController extends Controller
{

    public function index($id)
    {
        $module = Module::find($id);
        $shows = Show::all();

        return view('modules.index')->with(['module' => $module, 'shows' => $shows]);
    }
}
