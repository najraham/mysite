<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Footer;
use App\About;
use App\Review;
use App\Blog;
use App\Skill;
use App\Project;
use App\Message;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Index";
        $index = Index::first();
        $footer = Footer::first();
        return view('frontend.pages.index')->with([
            'index' => $index,
            'footer' => $footer,
            'title' => $title,
        ]);
    }

    public function about()
    {
        $title = "About";
        $about = About::first();
        $reviews = Review::all();
        $footer = Footer::first();
        return view('frontend.pages.about')->with([
            'about' => $about,
            'reviews' => $reviews,
            'footer' => $footer,
            'title' => $title,
        ]);
    }

    public function blog()
    {
        $title = "Blog";
        $blogs = Blog::all();
        $footer = Footer::first();
        return view('frontend.pages.blog')->with([
            'blogs' => $blogs,
            'footer' => $footer,
            'title' => $title,
        ]);
    }

    public function single_blog($id)
    {
        $title = "Single Blog";
        $blog = Blog::find($id);
        $footer = Footer::first();
        return view('frontend.pages.single-blog')->with([
            'blog' => $blog,
            'footer' => $footer,
            'title' => $title,
        ]);
    }
    
    public function works()
    {
        $title = "Works";
        $skills = Skill::all() ;
        $footer = Footer::first();
        $projects = Project::all();
        return view('frontend.pages.works')->with([
            'skills' => $skills,
            'projects' => $projects,
            'footer' => $footer,
            'title' => $title,
        ]);
    }

    public function contact()
    {
        $title = "Contact";
        $footer = Footer::first();
        return view('frontend.pages.contact')->with([
            'footer' => $footer,
            'title' => $title,
        ]);
    }

    public function portfolio()
    {
        $title = "Portfolio";
        // $index = Index::first();
        $footer = Footer::first();
        return view('frontend.pages.portfolio')->with([
            // 'index' => $index,
            'footer' => $footer,
            'title' => $title,
        ]);
    }

    public function portfolio_detail()
    {
        $title = "Portfolio Detail";
        // $index = Index::first();
        $footer = Footer::first();
        return view('frontend.pages.portfolio_details')->with([
            // 'index' => $index,
            'footer' => $footer,
            'title' => $title,
        ]);
    }


}
