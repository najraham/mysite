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
}
