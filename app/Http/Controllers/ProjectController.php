<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProjectController extends Controller
{
     public function index()
     {
          $projects = ProjectResource::collection(Project::with('skill')->get());
          return Inertia::render('Projects/index', compact('projects'));
     }

     public function create()
     {
          $skills = Skill::all();
          return Inertia::render('Projects/create', compact('skills'));
     }

     public function store(Request $request)
     {
          $request->validate([
               'skill_id' => 'required',
               'name' => 'required| min:3',
               'image' => 'required|image',
          ]);

          if ($request->hasFile('image')) {
               $image =  $request->file('image')->store('projects');
               Project::create([
                    'name' => $request->name,
                    'image' => $image,
                    'skill_id' => $request->skill_id,
                    'project_url' => $request->project_url,
               ]);

               return Redirect::route('projects.index');
          } else {
               return Redirect::back();
          }
     }

     public function edit(Project $project)
     {
          $skills = Skill::all();
          return Inertia::render('Projects/edit', compact('skills', 'project'));
     }

     public function update(Request $request, Project $project)
     {
          $image = $project->image;
          $request->validate([
               'name' => 'required|min:3',
               'skill_id' => 'required',

          ]);
          if ($request->hasFile('image')) {
                Storage::delete($image);
               $image = $request->file('image')->store('projects');
          }
          $project->update([
               'name' => $request->name,
               'skill_id' => $request->skill_id,
               'project_url' => $request->project_url,
               'image' => $image,
          ]);

          return Redirect::route('projects.index')->with('message', 'Project Data Update Successfully !');
     }

     public function destroy(Project $project)
     {
          Storage::delete($project->image);
            $project->delete();
            return Redirect::back()->with('message', 'Project Data Delete Successfully !');
     }
}
