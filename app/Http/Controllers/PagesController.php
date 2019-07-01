<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class PagesController extends Controller
{
    //
    public function home(){
        
        $tasks = [
            'first task',
            'second task',
        ];
        return view('welcome', compact('tasks'));
    
    }
    public function about(){

        return view('about');
    }

    public function index(){

        $projects = Project::all();

        return view('projects.index',compact('projects'));
    }

    
    public function create(){
        return view('projects.create');
    }

    public function store(Request $request){
        $project = new Project();

        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        return redirect('/projects');
    }
}