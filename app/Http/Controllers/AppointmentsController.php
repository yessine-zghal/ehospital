<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Patient;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AppointmentsController extends Controller
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

        $appointments = Appointment::get();
        $patients = Patient::get();
        return view('appointments',compact('appointments','patients'));
    }


    public function show()
    {  
        return view('add-appointments');
    }
    public function store(Request $request) {



        $appointment = new Appointment();
    
        $appointment->Appointment_ID = $request->Appointment_ID;
        $appointment->Patient_Name  = $request->Patient_Name ;
        $appointment->Department = $request->Department;
        $appointment->Doctor = $request->Doctor;
        $appointment->Date = $request->Date;
        $appointment->Time= $request->Time;
        $appointment->Patient_Email= $request->Patient_Email;
        $appointment->Patient_Phone_Number = $request->Patient_Phone_Number;
        $appointment->Message= $request->Message;
        $appointment->Appointment_Status= $request->Appointment_Status;     
        
        $appointment->save();
        
            return Redirect('/appointments')->with('mssg', 'New Appointments is regestrated !');
        
    
    }

    
}
