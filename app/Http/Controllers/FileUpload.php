<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Patient;
use App\Models\Doctor;

class FileUpload extends Controller
{

    public function showfile() {
        // use the $id variable to query the db for a record
        $files = file::all();
        $patients = Patient::all();
        $doctors = Doctor::all();
        $covid_oui=0;
        $covid_non=0;
        foreach($patients as $key =>$patient){
            if($patient->covid_check == 'oui'){
                $covid_oui++;
            }
            else{
                $covid_non++;
            }
        }


        
        return view('home', compact('files', 'patients','doctors','covid_oui','covid_non'));
    }
    public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:png,jpg,csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $fileModel = new File;

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/public/storage/' . $filePath;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }


}
