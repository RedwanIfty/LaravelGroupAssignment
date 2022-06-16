<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMSStudent;
use App\Models\UMSDepartment;

class UMSController extends Controller
{
    //
    function show(){
        $department=UMSDepartment::where('id',1)->first();
       // return $department->students;
        $student=UMSStudent::where('id',5)->first();
        //return $student->department;
        return view('Department.dept')
        ->with('department',$department->students)
        ->with('student',[$student->department]);
 
    }
}
