<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DepartmentsController extends Controller
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
        return view('departments.departments');
    }
    public function dentalcare()
    {  
        return view('departments.dentalcare');
    }
    public function covid()
    {  
        return view('departments.covid');
    }
    public function eyecare()
    {  
        return view('departments.eyecare');
    }
    public function notyet()
    {  
        return view('departments.notyet');
    }
    public function gynecologue(){
        return view('departments.gynecologue');

    }

}
