<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {  
        $employees = Employee::all();

        return view('employees.employees',compact('employees'));
    }

    public function addEmployee(){

        return view('employees.add-employee');
    }


    public function updateEmployee($id){

        $employee = Employee::find($id);

        return view('employees.update-employee', compact('employee'));
    }


    public function store(Request $request) {

        $employee = new Employee();
    
        $employee->Firstname = $request->Firstname;
        $employee->lastname = $request->Lastname;
        $employee->username = $request->username;
        $employee->email = $request->email;
        $employee->password = bcrypt($request->password);
        $employee->emploee_id = $request->emploee_id;
        $employee->joiningDate = $request->joiningDate;
        $employee->phone = $request->phone;
        $employee->role = $request->role;
        $employee->status = $request->status;
        
        $employee->save();


        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
    
        return redirect('/employees')->with('mssg', 'New Employee is registrated !');
    }

    public function storeUpdate(Request $request, $id) {

        $employee = Employee::find($id);

        $email = $employee->email;
    
        $employee->Firstname = $request->Firstname;
        $employee->lastname = $request->Lastname;
        $employee->username = $request->username;
        $employee->email = $request->email;
        $employee->emploee_id = $request->emploee_id;
        $employee->joiningDate = $request->joiningDate;
        $employee->phone = $request->phone;
        $employee->role = $request->role;
        $employee->status = $request->status;

        
        
        $employee->save();


        $userid = DB::table('users')->where('email', $email)->first();

        $user = User::find($userid->id);

        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
    
        return redirect('/employees')->with('mssg', 'Employee is updated !');
    }

    public function DeleteEmployee($email) {

        $employee = DB::table('employees')->where('email', $email)->delete();
        $user = DB::table('users')->where('email', $email)->delete();

        return redirect('/employees')->with('mssg', 'Employee deleted successfully !');


    }
}
