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
        $title = "Work";
        $index = Index::first();
        return view('backend.pages.index')->with([
            'title' => $title,
            'index' => $index,
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
}
