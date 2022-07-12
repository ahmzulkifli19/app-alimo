<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use DB;
use App\Models\Assignment;
use App\Models\Initiatives;


class AssignmentController extends Controller
{
    public function index()
    {
        $assignment = Assignment::with('initiatives')->paginate(10);
        $initiatives = Initiatives::latest()->get();
        $initiativess = Initiatives::all();
        return view('assignment.index', compact('assignment','initiatives', 'initiativess'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'initiatives_id' => 'required',
            'assignment' => 'required',
        ]);

        $assignment = Assignment::create([
            'initiatives_id' => $request->initiatives_id,
            'assignment' => $request->assignment,
        ]);

        if ($assignment) {
            return redirect()
                ->route('assignment.index')
                ->with([
                    'success' => 'Project Assignment has been created successfully'
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
        $assignment = Assignment::findOrFail($id);
        $initiatives = Assignment::with('initiatives')->paginate(10);
        return view('assignment.edit', compact('assignment','initiatives'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            // 'initiatives_id' => 'required',
            'assignment' => 'required',
        ]);

        $assignment = Assignment::findOrFail($id);

        $assignment->update([
            // 'initiatives_id' => $request->initiatives_id,
            'assignment' => $request->assignment,
        ]);

        if ($assignment) {
            return redirect()
                ->route('assignment.index')
                ->with([
                    'success' => 'Project Assignment has been updated successfully'
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
        $assignment = Initiatives::findOrFail($id);
        $assignment->delete();

        if ($assignment) {
            return redirect()
                ->route('assignment.index')
                ->with([
                    'success' => 'Project Assignment has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('assignment.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }

}
