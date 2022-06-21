<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::latest()->get();
        return view('project.index', compact('project'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:500',
            'client' => 'required',
            'start_date' => 'required|date',
            'deadline' => 'required',
            'progress' => 'required',
            'status' => 'required'
        ]);

        $project = Project::create([
            'title' => $request->title,
            'client' => $request->client,
            'start_date' => $request->start_date,
            'deadline' => $request->deadline,
            'progress' => $request->progress,
            'status' => $request->status,            
        ]);

        if ($project) {
            return redirect()
                ->route('project.index')
                ->with([
                    'success' => 'New project has been created successfully'
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
        $project = Project::findOrFail($id);
        return view('project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:500',
            'client' => 'required',
            'start_date' => 'required|date',
            'deadline' => 'required',
            'progress' => 'required',
            'status' => 'required'
        ]);

        $project = Project::findOrFail($id);

        $project->update([
            'title' => $request->title,
            'client' => $request->client,
            'start_date' => $request->start_date,
            'deadline' => $request->deadline,
            'progress' => $request->progress,
            'status' => $request->status, 
        ]);

        if ($project) {
            return redirect()
                ->route('project.index')
                ->with([
                    'success' => 'Project has been updated successfully'
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
        $project = Project::findOrFail($id);
        $project->delete();

        if ($project) {
            return redirect()
                ->route('project.index')
                ->with([
                    'success' => 'Project has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('project.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
