<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function home(){
        $employees = Employee::paginate(5);
        return view('index', compact('employees'));
    }

    public function delete($id){
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->back();
    }
}
