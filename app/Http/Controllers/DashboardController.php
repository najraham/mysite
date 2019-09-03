<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\About;
use App\Project;
use App\Skill;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $title = "Dashboard";
        return view('backend.pages.dash')->with('title' , $title);
    }

    public function index()
    {
        $title = "Index";
        $index = Index::first();
        return view('backend.pages.index')->with([
            'title' => $title,
            'index' => $index,
            ]);
    }

    public function about()
    {
        $title = "About";
        $about = About::first();
        return view('backend.pages.about')->with([
            'title' => $title,
            'about' => $about,
            ]);
    }

    public function work()
    {
        $title = "Projects";
        $title1 = "Skills";
        $projects = Project::all();
        $skills = Skill::all();
        return view('backend.pages.works')->with([
            'title' => $title,
            'title1' => $title1,
            'projects' => $projects,
            'skills' => $skills,
            ]);
    }


    public function editIndex(Request $request)
    {
        $index = Index::find($request->input('id'));
        $index->first_name = $request->input('first_name');
        $index->last_name = $request->input('last_name');
        $index->slogan = $request->input('slogan');
        $index->intro = $request->input('introduction');
        $index->description = $request->input('description');
        $index->image = $request->input('image');
        $index->save();

        return redirect()->back()->with('success' , 'Value(s) edited....');
    }

    public function editAbout(Request $request)
    {
        $about = About::find($request->input('id'));
        $about->title = $request->input('title');
        $about->description = $request->input('description');
        $about->save();

        return redirect()->back()->with('success' , 'Value(s) edited....');
    }

    public function editProject(Request $request)
    {
        $project = Project::find($request->input('id'));
        $project->image = $request->input('image');
        $project->title = $request->input('title');
        $project->link = $request->input('link');
        $project->save();

        return redirect()->back()->with('success' , 'Value(s) edited..');
    }

    public function editSkill(Request $request)
    {
        $skill = Skill::find($request->input('id'));
        $skill->name = $request->input('name');
        $skill->percentage = $request->input('percentage');
        $skill->save();

        return redirect()->back()->with('success' , 'Value(s) edited..');
    }

    public function addProject(Request $request)
    {
        $project = new Project();
        $project->image = $request->input('image');
        $project->title = $request->input('title');
        $project->link = $request->input('link');
        $project->save();

        return redirect()->back()->with('success' , 'New project added');
    }

    public function addSkill(Request $request)
    {
        $skill = new Skill();
        $skill->name = $request->input('name');
        $skill->percentage = $request->input('percentage');
        $skill->save();

        return redirect()->back()->with('success' , 'New skill added');
    }
}
