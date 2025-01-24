<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Response;
use function MongoDB\BSON\toJSON;

class HomeController extends Controller
{
    public function index(): Response
    {
        $projects = Project::all();
        $experiences = Experience::all();
//        $data = ['projects' => $projects, 'experiences'=>$experience];
//        dd(json_encode($data));
        return response()->view('home', compact(['projects', 'experiences']));
    }
}
