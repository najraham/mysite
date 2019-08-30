<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\Footer;
use App\About;
use App\Review;
use App\Skill;

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
        // $index = Index::first();
        $footer = Footer::first();
        return view('frontend.pages.blog')->with([
            // 'index' => $index,
            'footer' => $footer,
            'title' => $title,
        ]);
    }

    public function single_blog()
    {
        $title = "Single Blog";
        // $index = Index::first();
        $footer = Footer::first();
        return view('frontend.pages.single-blog')->with([
            // 'index' => $index,
            'footer' => $footer,
            'title' => $title,
        ]);
    }

    public function contact()
    {
        $title = "Contact";
        // $index = Index::first();
        $footer = Footer::first();
        return view('frontend.pages.contact')->with([
            // 'index' => $index,
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

    public function works()
    {
        $title = "Works";
        $skills = Skill::all() ;
        $footer = Footer::first();
        return view('frontend.pages.works')->with([
            'skills' => $skills,
            'footer' => $footer,
            'title' => $title,
        ]);
    }

}
