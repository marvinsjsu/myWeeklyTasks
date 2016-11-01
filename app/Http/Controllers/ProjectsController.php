<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProjectsController extends Controller
{

    public function index()
    {
        $projects = Project::all();

        return view('projects.index', ['projects' => $projects]);
    }

    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show', ['project' => $project]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        $request['status'] = 'red';
        $request['done'] = false;
        
        return Project::create($request->all());        
    }

    public function edit($id) 
    {
        $project = Project::find($id);

        return view('projects.edit', ['project' => $project]);
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
    	$project = Project::find($id);
        $project->delete();
    }
}
