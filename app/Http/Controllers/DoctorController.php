<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;

class DoctorController extends Controller
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
        $doctors = Doctor::all();

        return view('doctors',compact('doctors'));
    }

    public function addDoctor(){

        return view('add-doctor');
    }
    //modif

    public function store(Request $request) {



        $doctor = new Doctor();
    
        $doctor->Firstname = $request->Firstname;
        $doctor->lastname = $request->Lastname;
        $doctor->username = $request->username;
        $doctor->email = $request->email;
        $doctor->password = bcrypt($request->password);
        $doctor->dateofbirth = $request->dateofbirth;
        $doctor->gender = $request->gender;
        $doctor->adress = $request->adress;
        $doctor->country = $request->country;
        $doctor->city = $request->city;
        $doctor->state = $request->state;
        $doctor->postalcode = $request->postalcode;
        $doctor->phone = $request->phone;
        $doctor->biography = $request->biography;
        $doctor->status = $request->status;

        if($request->hasFile('image')) {

            $destination = 'storage/uploads/doctors/'.$doctor->image;
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/uploads/doctors/', $filename);
            $doctor->image = $filename;

        }
        
        $doctor->save();


        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
    
        return redirect('/doctors')->with('mssg', 'New Doctor is regestrated !');
    }
}
