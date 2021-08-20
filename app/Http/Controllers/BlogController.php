<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $blogs = Blog::all();

        return view('blogs.blog',compact('blogs'));
    }
    public function addBlog(){

        return view('blogs.add-blog');
    }

    public function store(Request $request) {



        $blog = new Blog();
    
        $blog->blogname = $request->blogname;
        $blog->blogcategory = $request->blogcategory;
        $blog->blogdescription = $request->blogdescription;
        $blog->tags = $request->tags;
        

        if($request->hasFile('image')) {

            $destination = 'storage/uploads/blogs/'.$blog->image;
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/uploads/blogs/', $filename);
            $blog->image = $filename;

        }
        
        $blog->save();



    
        return redirect('/blog')->with('mssg', 'New blog is regestrated !');
    }
}
