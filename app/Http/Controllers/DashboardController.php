<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
use App\About;
use App\Project;
use App\Skill;
use App\Blog;
use App\Message;
use App\Footer;

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

    public function __construct() 
    {
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
        $title = "Work";
        $title2 = "Projects";
        $title1 = "Skills";
        $projects = Project::all();
        $skills = Skill::all();
        return view('backend.pages.works')->with([
            'title' => $title,
            'title2' => $title2,
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
        $index = Index::find($request->input('id'));

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

            $index->image = $fileNameToStore;
        } 
        else 
        {
            $index->image = $request->input('preimage');
        }

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

    public function editProject(Request $request)
    {
        $project = Project::find($request->input('id'));

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

            $project->image = $fileNameToStore;
        } 
        else 
        {
            $project->image = $request->input('preimage');
        }

        
        
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
        $blog = Blog::find($request->input('id'));

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

            $blog->image = $fileNameToStore;
        } 
        else 
        {
            $blog->image = $request->input('preimage');
        }

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

        return redirect()->back()->with('success' , 'Project deleted');
    }

    public function deleteSkill($id)
    {
        $skill = Skill::find($id);
        $skill->delete();

        return redirect()->back()->with('success' , 'Skill deleted');
    }

    public function deleteBlog($id)
    {
        $skill = Blog::find($id);
        $skill->delete();

        return redirect('/editBlog')->with('success' , 'Blog deleted');
    }

    public function contact()
    {
        $title = "Contact";
        $contact = Footer::first();

        return view('backend.pages.contact')->with([
            'title' => $title,
            'contact' => $contact,
        ]);
    }

    public function updateContact(Request $request)
    {
        $contact = Footer::find($request->input('id'));
        $contact->address = $request->input('address');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->website = $request->input('website');
        $contact->save();

        return redirect()->back()->with('success' , 'Value(s) updated');
    }

    public function link()
    {
        $title = "Link";
        $link = Footer::first();

        return view('backend.pages.link')->with([
            'title' => $title,
            'link' => $link,
        ]);
    }
}
