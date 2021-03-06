<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use App\Models\Initiatives;
use App\Models\Assignment;
use Session;
use Auth;

class InitiativesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $initiatives = Initiatives::latest()->get();
        return view('initiatives.index', compact('initiatives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('initiatives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'project_code' => 'required',
            'name_project' => 'required',
            'project_category' => 'required',
            'year' => 'required',
            'priority' => 'required',
            'client' => 'required',
            'email' => 'required',
            'description' => 'required',
        ]);

        $initiatives = Initiatives::create([
            'project_code' => $request->project_code,
            'name_project' => $request->name_project,
            'project_category' => $request->project_category,
            'year' => $request->year,
            'priority' => $request->priority,
            'client' => $request->client,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        $setprojectcode = $request->project_code;
        $getInitiatives = Initiatives::where('project_code', '=', $setprojectcode)->get()->first();

        $assignment = Assignment::create([
            'initiatives_id' => $getInitiatives['id'],
            'assignment' => NULL,
        ]);

        if ($initiatives) {
            return redirect()
                ->route('initiatives.index')
                ->with([
                    'success' => 'Project Initiatives has been created successfully'
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $initiatives = Initiatives::findOrFail($id);
        return view('initiatives.edit', compact('initiatives'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'project_code' => 'required',
            'name_project' => 'required',
            'project_category' => 'required',
            'year' => 'required',
            'priority' => 'required',
            'client' => 'required',
            'email' => 'required',
            'description' => 'required',
        ]);

        $initiatives = Initiatives::findOrFail($id);

        $initiatives->update([
            'project_code' => $request->project_code,
            'name_project' => $request->name_project,
            'project_category' => $request->project_category,
            'year' => $request->year,
            'priority' => $request->priority,
            'client' => $request->client,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        if ($initiatives) {
            return redirect()
                ->route('initiatives.index')
                ->with([
                    'success' => 'Project Initiatives has been updated successfully'
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $initiatives = Initiatives::findOrFail($id);
        $initiatives->delete();

        if ($initiatives) {
            return redirect()
                ->route('initiatives.index')
                ->with([
                    'success' => 'Project Initiatives has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('initiatives.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
