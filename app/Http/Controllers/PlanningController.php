<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use App\Models\Initiatives;
use App\Models\Planning;


class PlanningController extends Controller
{
    public function index()
    {
        $planning = Planning::with('initiatives')->paginate(10);
        $initiatives = Initiatives::latest()->get();
        return view('projects.project-planning', compact('planning','initiatives'));
        // $plannings = DB::table('planning')
        //             ->join('initiatives', 'planning.id', '=', 'initiatives.id')
        //             ->select('planning.*', 'initiatives.project_code', 'initiatives.name_project',
        //                     'initiatives.project_category', 'initiatives.year', 'initiatives.priority',
        //                     'initiatives.status', 'initiatives.client')
        //             ->get();
        // $planning = DB::table('planning')->get();
        // return view('projects.project-planning',compact('plannings','planning'));
    }
}
