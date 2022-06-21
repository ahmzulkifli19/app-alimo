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
        return view('assignment.index', compact('assignment','initiatives'));

        // $assignment = DB::table('assignment')
        //         ->join('initiatives', 'initiatives.id', '=', 'assignment.id')
        //         ->select('assignment.*', 'initiatives.project_code','initiatives.name_project','initiatives.project_category','initiatives.year','initiatives.priority','initiatives.client', )
        //         ->get();
        // $assignment = DB::table('initiatives')->get();
        // return view('assignment.index',compact('initiatives','assignment'));
            // return view('assignment.index');
    }

    public function detail($id)
    {
        $assignment = Initiatives::findOrFail($id);
        return view('assignment.index', compact('assignment'));
    }

    public function __construct()
    {
        $this->Assignment = new Assignment();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'project_code' => 'required',
            'name_project' => 'required',
            'project_category' => 'required',
            'year' => 'required',
            'priority' => 'required',
            'status' => 'required',
            'client' => 'required',
            'email' => 'required',
            'description' => 'required',
            'assignment' => 'required',
        ]);

        $assignment = Initiatives::create([
            'project_code' => $request->project_code,
            'name_project' => $request->name_project,
            'project_category' => $request->project_category,
            'year' => $request->year,
            'priority' => $request->priority,
            'status' => $request->status,
            'client' => $request->client,
            'email' => $request->email,
            'description' => $request->description,
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
        $assignment = Initiatives::findOrFail($id);
        return view('assignment.edit', compact('assignment'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'project_code' => 'required',
            'name_project' => 'required',
            'project_category' => 'required',
            'year' => 'required',
            'priority' => 'required',
            // 'status' => 'required',
            'client' => 'required',
            // 'email' => 'required',
            // 'description' => 'required',
            'assignment' => 'required',
        ]);

        $assignment = Initiatives::findOrFail($id);

        $assignment->update([
            'project_code' => $request->project_code,
            'name_project' => $request->name_project,
            'project_category' => $request->project_category,
            'year' => $request->year,
            'priority' => $request->priority,
            // 'status' => $request->status,
            'client' => $request->client,
            // 'email' => $request->email,
            // 'description' => $request->description,
            'assignment' => $request->assignment,
        ]);

        if ($assignment) {
            return redirect()
                ->route('assignment.index')
                ->with([
                    'success' => 'Project Assignmant has been updated successfully'
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
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $assignment = Assignment::latest()->get();
    //     return view('assignment.index', compact('assignment'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('assignment.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'project_code' => 'required',
    //         'name_project' => 'required',
    //         'project_category' => 'required',
    //         'year' => 'required',
    //         'priority' => 'required',
    //         'status' => 'required',
    //         'client' => 'required',
    //         'email' => 'required',
    //         'description' => 'required',
    //         'assignment' => 'required',
    //     ]);

    //     $assignment = Assignment::create([
    //         'project_code' => $request->project_code,
    //         'name_project' => $request->name_project,
    //         'project_category' => $request->project_category,
    //         'year' => $request->year,
    //         'priority' => $request->priority,
    //         'status' => $request->status,
    //         'client' => $request->client,
    //         'email' => $request->email,
    //         'description' => $request->description,
    //         'assignment' => $request->assignment,
    //     ]);

    //     if ($assignment) {
    //         return redirect()
    //             ->route('assignment.index')
    //             ->with([
    //                 'success' => 'Project Initiatives has been created successfully'
    //             ]);
    //     } else {
    //         return redirect()
    //             ->back()
    //             ->withInput()
    //             ->with([
    //                 'error' => 'Some problem occurred, please try again'
    //             ]);
    //     }
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $assignment = Assignment::findOrFail($id);
    //     return view('assignment.edit', compact('assignment'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $this->validate($request, [
    //         'project_code' => 'required',
    //         'name_project' => 'required',
    //         'project_category' => 'required',
    //         'year' => 'required',
    //         'priority' => 'required',
    //         'status' => 'required',
    //         'client' => 'required',
    //         'email' => 'required',
    //         'description' => 'required',
    //         'assignment' => 'required',
    //     ]);

    //     $assignment = Assignment::findOrFail($id);

    //     $assignment->update([
    //         'project_code' => $request->project_code,
    //         'name_project' => $request->name_project,
    //         'project_category' => $request->project_category,
    //         'year' => $request->year,
    //         'priority' => $request->priority,
    //         'status' => $request->status,
    //         'client' => $request->client,
    //         'email' => $request->email,
    //         'description' => $request->description,
    //         'assignment' => $request->assignment,
    //     ]);

    //     if ($assignment) {
    //         return redirect()
    //             ->route('assignment.index')
    //             ->with([
    //                 'success' => 'Project Initiatives has been updated successfully'
    //             ]);
    //     } else {
    //         return redirect()
    //             ->back()
    //             ->withInput()
    //             ->with([
    //                 'error' => 'Some problem has occured, please try again'
    //             ]);
    //     }
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $assignment = Initiatives::findOrFail($id);
    //     $assignment->delete();

    //     if ($assignment) {
    //         return redirect()
    //             ->route('assignment.index')
    //             ->with([
    //                 'success' => 'Project Initiatives has been deleted successfully'
    //             ]);
    //     } else {
    //         return redirect()
    //             ->route('assignment.index')
    //             ->with([
    //                 'error' => 'Some problem has occurred, please try again'
    //             ]);
    //     }
    // }
}
