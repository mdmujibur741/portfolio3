<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Http\Resources\SkillResource;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
     public function index()
     {
          $skills = SkillResource::collection(Skill::all());
          $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Frontend/index',compact('skills','projects'));
     }
}
