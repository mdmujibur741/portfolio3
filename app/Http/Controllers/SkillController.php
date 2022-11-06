<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;


class SkillController extends Controller
{
    public function index()
    {
           $skills = SkillResource::collection(Skill::all());
       
       return Inertia::render('Skills/index',compact('skills'));
    }

    public function create()
    {
          return Inertia::render('Skills/create');
    }

    public function store(Request $request)
    {
          $request->validate([
              'name' => 'required',
              'image' => 'required|image',
          ]);

          if($request->hasFile('image')){
              $image = $request->file('image')->store('skills');
              Skill::create([
                 'name' => $request->name,
                 'image' => $image
              ]);

              return Redirect::back()->with('message', 'Skill Add Successfully ! ');
          }else{
            return Redirect::back();
          }
    }


    public function edit(Skill $skill)
    {
          return Inertia::render('Skills/edit',compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
         $image = $skill->image;
         $request->validate([
                'name' => 'required|min:3',           
         ]);

         if($request->hasFile('image')){
              Storage::delete($skill->image);
               $image = $request->file('image')->store('skills');
         }
         $skill->update([
              'name' => $request->name,
              'image' => $image
         ]);

         return Redirect::route('skills.index')->with('message', 'Skill Update Successfully !');
    }

    public function destroy(Skill $skill)
    {
           Storage::delete($skill->image);
           $skill->delete();
           return Redirect::back()->with('message', 'Skill Deleted Successfully !');

    }
   
}
