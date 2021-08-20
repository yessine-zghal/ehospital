<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blog;
class BlogdetailsController extends Controller
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
        return view('blogs.blog-details');
    }
    public function show($id) {
        // use the $id variable to query the db for a record
        $blog = Blog::findOrFail($id);
        return view('blogs.blog-details', ['blog' => $blog]);
    }
    
}
