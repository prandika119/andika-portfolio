<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    public function show(Project $project): Response{
        return response()->view('project_detail', compact('project'));
    }
}
