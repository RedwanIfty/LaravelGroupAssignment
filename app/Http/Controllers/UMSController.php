<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMSStudent;
use App\Models\UMSDepartment;
use App\Models\UMSTeacher;
use App\Models\UMSCourses;
use App\Models\UMSStudentCourse;

class UMSController extends Controller
{
    //
    function show($id){
        $department=UMSDepartment::where('id',$id)->first();
       //return $department->teachers;

         $student=UMSStudent::where('id',$id)->first();
        // return $student->department;
         $teacher=UMSTeacher::where('id',$id)->first();
        //return $teacher->department;//->departmentTeacher;
        $course=UMSCourses::where('id',$id)->first();
        //return $course->department;
        $s_c=UMSStudentCourse::where('id',$id)->first();
        return $s_c->student;
        //  return view('Department.dept')
        //  ->with('department',$department->students)
        //  ->with('student',[$student->department])
        //  ->with('teacher',$department->teachers);

 
    }
}
