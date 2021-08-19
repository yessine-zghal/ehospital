<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\File;

class PatientsController extends Controller
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
    {  $patients = Patient::all();
     
        
        return view('patients.patients', ['patients' => $patients] );
      }

      public function show($id) {
        // use the $id variable to query the db for a record
        $patient = Patient::findOrFail($id);
        //$files = File::findOrFail($id);
        return view('patients.fichepatient', ['patient' => $patient]);
        //,['file' => $files]
      
      
      }
      public function destroy($id) {

        $patient = patient::findOrFail($id);
        $patient->delete();
    
        return redirect('/patients');
    
      }
      
}
