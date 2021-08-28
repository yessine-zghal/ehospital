<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\patient;

class AddpatientController extends Controller
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
        return view('patients.add-patient');
    }
    public function store(Request $request) {

        $patient = new Patient();
    
        $patient->Firstname = $request->Firstname;
        $patient->lastname = $request->Lastname;
        $patient->username = $request->username;
        $patient->email = $request->email;
        $patient->dateofbirth = $request->dateofbirth;
        $patient->address = $request->address;
        $patient->city = $request->city;
        $patient->country = $request->country;
        $patient->postalcode = $request->postalcode;
        $patient->state = $request->state;
        $patient->phone = $request->phone;
        $patient->gendre = $request->gender;
        $patient->covid_check = $request->covid_check;


        if($request->hasFile('file')) {
          

            $destination = 'storage/uploads/patiens/'.$patient->file;
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/uploads/patiens/', $filename);
            $patient->file = $filename;

        }
        if($request->hasFile('patientrecord')) {
            $request->validate([
                'patientrecord' => 'required|mimes:png,jpg,csv,txt,xlx,xls,pdf|max:2048'
                ]);

            $destination = 'storage/uploads/patiensrecord/'.$patient->patientrecord;
            $file = $request->file('patientrecord');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/uploads/patiensrcord/', $filename);
            $patient->patientrecord = $filename;

        }
        
        //error_log($patient);
        $patient->save();
    
        return redirect('/patients')->with('mssg', 'New Patient is regestrated !');
    }
}
