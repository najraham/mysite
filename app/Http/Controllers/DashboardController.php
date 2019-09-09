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
use App\Review;

class DashboardController extends Controller
{
    public function changeMessageStatus($id)
    {
        $message = Message::find($id);
        $message->status = "read";
        $message->save();

        return redirect()->back();
    }

    public function single_blog($id)
    {
        $blog = Blog::find($id);
        $title = "Single Blog";
        $messages = Message::all()->where('status' , 'unread');

        return view('backend.pages.single_blog')->with([
            'title' => $title,
            'blog' => $blog,
            'messages' => $messages,
            ]);
    }

    public function review()
    {
        $title = "Review";
        $reviews = Review::all();
        return view('backend.pages.reviews')->with([
            'reviews' => $reviews,
            'title' => $title,
        ]);
    }

    public function addReview(Request $request)
    {
        $review = new Review();
        $review->title = $request->input('title');
        $review->description = $request->input('description');
        $review->save();

        return redirect()->back()->with('success' , 'Review added');
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
        $messages = Message::all()->where('status' , 'unread');
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
        $messages = Message::all()->where('status' , 'unread');
        return view('backend.pages.index')->with([
            'title' => $title,
            'index' => $index,
            'messages' => $messages,
            ]);
    }

    public function about()
    {
        $title = "About";
        $about = About::first();
        $messages = Message::all()->where('status' , 'unread');
        return view('backend.pages.about')->with([
            'title' => $title,
            'about' => $about,
            'messages' => $messages,
            ]);
    }

    public function work()
    {
        $title = "Work";
        $title2 = "Projects";
        $title1 = "Skills";
        $projects = Project::all();
        $skills = Skill::all();
        $messages = Message::all()->where('status' , 'unread');
        return view('backend.pages.works')->with([
            'title' => $title,
            'title2' => $title2,
            'title1' => $title1,
            'projects' => $projects,
            'skills' => $skills,
            'messages' => $messages,
            ]);
    }

    public function blog()
    {
        $title = "Blogs";
        $blogs = Blog::all();
        $messages = Message::all()->where('status' , 'unread');
        return view('backend.pages.blog')->with([
            'title' => $title,
            'blogs' => $blogs,
            'messages' => $messages,
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
        $messages = Message::all()->where('status' , 'unread');

        return view('backend.pages.contact')->with([
            'title' => $title,
            'contact' => $contact,
            'messages' => $messages,
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
        $messages = Message::all()->where('status' , 'unread');

        return view('backend.pages.link')->with([
            'title' => $title,
            'link' => $link,
            'messages' => $messages,
        ]);
    }
}
