<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\About;
use App\Project;
use App\Skill;
use App\Blog;
use App\Message;

class DashboardController extends Controller
{
    public function single_blog($id)
    {
        $blog = Blog::find($id);
        $title = "Single Blog";
        return view('backend.pages.single_blog')->with([
            'title' => $title,
            'blog' => $blog,
            ]);
    }

    public function __construct() {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        $title = "Dashboard";
        $blogs = Blog::all();
        $projects = Project::all();
        $skills = Skill::all();
        $messages = Message::all();
        return view('backend.pages.dash')->with([
            'title' => $title,
            'blogs' => $blogs,
            'projects' => $projects,
            'skills' => $skills,
            'messages' => $messages,
            ]);
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

    public function blog()
    {
        $title = "Blogs";
        $blogs = Blog::all();
        return view('backend.pages.blog')->with([
            'title' => $title,
            'blogs' => $blogs,
            ]);
    }

    public function editIndex(Request $request)
    {
        if($request->hasFile('image'))
        {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } 
        else 
        {
            $fileNameToStore = 'noimage.jpg';
        }

        $index = Index::find($request->input('id'));
        $index->first_name = $request->input('first_name');
        $index->last_name = $request->input('last_name');
        $index->slogan = $request->input('slogan');
        $index->intro = $request->input('introduction');
        $index->description = $request->input('description');
        $index->image = $fileNameToStore;
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
        if($request->hasFile('image'))
        {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } 
        else 
        {
            $fileNameToStore = 'noimage.jpg';
        }

        $project = Project::find($request->input('id'));
        $project->image = $fileNameToStore;
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

    public function editBlog(Request $request)
    {
        if($request->hasFile('image'))
        {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } 
        else 
        {
            $fileNameToStore = 'noimage.jpg';
        }

        $blog = Blog::find($request->input('id'));
        $blog->image = $fileNameToStore;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->save();

        return redirect()->back()->with('success' , 'Value(s) edited..');
    }

    public function addProject(Request $request)
    {
        if($request->hasFile('image'))
        {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } 
        else 
        {
            $fileNameToStore = 'noimage.jpg';
        }

        $project = new Project();
        $project->image = $fileNameToStore;
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

    public function addBlog(Request $request)
    {
        if($request->hasFile('image'))
        {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } 
        else 
        {
            $fileNameToStore = 'noimage.jpg';
        }

        $blog = new Blog();
        $blog->image = $fileNameToStore;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->user_id = 1;
        $blog->save();

        return redirect()->back()->with('success' , 'New blog added');
    }

    public function deleteProject($id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect()->back()->with('error' , 'Project deleted');
    }

    public function deleteSkill($id)
    {
        $skill = Skill::find($id);
        $skill->delete();

        return redirect()->back()->with('error' , 'Skill deleted');
    }

    public function deleteBlog($id)
    {
        $skill = Blog::find($id);
        $skill->delete();

        return redirect()->back()->with('error' , 'Blog deleted');
    }
}
