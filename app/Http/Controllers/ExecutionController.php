<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use App\Models\Initiatives;
use App\Models\Planning;
use App\Models\execution;


class ExecutionController extends Controller
{
    public function index()
    {
        $execution = Execution::with('initiatives','planning')->paginate(10);
        $initiatives = Initiatives::latest()->get();
        $planning = Planning::latest()->get();
        $initiativess = Initiatives::all();
        $plannings = Planning::all();
        return view('execution.index', compact('execution','initiatives', 'planning', 'initiativess', 'plannings'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'initiatives_id' => 'required',
            'planning_id' => 'required',
            'status' => 'required',
            'progress' => 'required',
        ]);

        $execution = Execution::create([
            'initiatives_id' => $request->initiatives_id,
            'planning_id' => $request->planning_id,
            'status' => $request->status,
            'progress' => $request->progress,
        ]);

        if ($execution) {
            return redirect()
                ->route('execution.index')
                ->with([
                    'success' => 'Project Execution has been created successfully'
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
        $execution = Execution::findOrFail($id);
        $initiatives = Execution::with('initiatives')->paginate(10);
        $planning = Execution::with('planning')->paginate(10);
        // $executionn = Execution::with('initiatives','planning')->paginate(100);
        return view('execution.edit', compact('execution', 'initiatives', 'planning'));

        // $execution = Execution::findOrFail($id);
        // $initiatives = Planning::with('initiatives')->paginate(10);
        // return view('planning.edit', compact('planning','initiatives'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            // 'initiatives_id' => 'required',
            // 'planning_id' => 'required',
            'status' => 'required',
            'progress' => 'required',
        ]);

        $execution = Execution::findOrFail($id);

        $execution->update([
            // 'initiatives_id' => $request->initiatives_id,
            // 'planning_id' => $request->planning_id,
            'status' => $request->status,
            'progress' => $request->progress,
        ]);

        if ($execution) {
            return redirect()
                ->route('execution.index')
                ->with([
                    'success' => 'Project Execution has been updated successfully'
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
        $execution = Execution::findOrFail($id);
        $execution->delete();

        if ($execution) {
            return redirect()
                ->route('execution.index')
                ->with([
                    'success' => 'Project Execution has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('execution.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
