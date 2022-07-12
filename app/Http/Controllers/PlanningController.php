<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use App\Models\Initiatives;
use App\Models\Assignment;
use App\Models\Planning;


class PlanningController extends Controller
{
    public function index()
    {
        $assignment = Assignment::with('initiatives')->paginate(10);
        $initiatives = Planning::with('initiatives')->paginate(10);
        $planning = Planning::latest()->get();
        $initiativess = Initiatives::all();
        return view('planning.index', compact('assignment', 'planning', 'initiatives', 'initiativess'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'initiatives_id' => 'required',
            'division' => 'required',
            'pic' => 'required',
            'start_date' => 'required',
            'due_date' => 'required',
            // 'progress' => 'required',
        ]);

        $planning = Planning::create([
            'initiatives_id' => $request->initiatives_id,
            'division' => $request->division,
            'pic' => $request->pic,
            'start_date' => $request->start_date,
            'due_date' => $request->due_date,
            // 'progress' => $request->progress,
        ]);

        if ($planning) {
            return redirect()
                ->route('planning.index')
                ->with([
                    'success' => 'Project Planning has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function edit($id)
    {
        $planning = Planning::findOrFail($id);
        $initiatives = Planning::with('initiatives')->paginate(10);
        return view('planning.edit', compact('planning','initiatives'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            // 'initiatives_id' => 'required',
            'division' => 'required',
            'pic' => 'required',
            'start_date' => 'required',
            'due_date' => 'required',
            // 'progress' => 'required',
        ]);

        $planning = Planning::findOrFail($id);

        $planning->update([
            // 'initiatives_id' => $request->initiatives_id,
            'division' => $request->division,
            'pic' => $request->pic,
            'start_date' => $request->start_date,
            'due_date' => $request->due_date,
            // 'progress' => $request->progress,
        ]);

        if ($planning) {
            return redirect()
                ->route('planning.index')
                ->with([
                    'success' => 'Project Planning has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    public function destroy($id)
    {
        $planning = Planning::findOrFail($id);
        $planning->delete();

        if ($planning) {
            return redirect()
                ->route('planning.index')
                ->with([
                    'success' => 'Project Planning has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('planning.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
