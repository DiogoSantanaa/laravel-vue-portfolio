<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get all the information that projects has
        //$projects = \App\Project::all();
        //dd($projects);
        $projects = Project::latest()->get();

        return view('projects.index', ['projects' => $projects]);
    }

    public function show(Project $projects)
    {
        //Show a single resource

        return view('projects.show', ['project' => $projects]);
    }

    public function create()
    {
        // Show a view to create a new resource
        return view('projects.create');
    }

    public function store()
    {
        // Persist the new resource

        //$article = Article::find($id);
        Project::create($this->validateProject());

        return redirect(route('projects.show'));
    }

    public function validateProject()
    {
        return request()->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'thumbnail' => 'required',
        ]);
    }
}
