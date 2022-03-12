<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectsModel;

class ProjectsController extends Controller
{
    public function ProjectPage()
    {
        $projectsData = json_decode(ProjectsModel::orderBy('id','desc')->get());

        return view('projects',[
            'projectsData' => $projectsData
        ]);
    }
}
