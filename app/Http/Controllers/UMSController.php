<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMSStudent;
use App\Models\UMSDepartment;
use App\Models\UMSTeacher;
use App\Models\UMSCourses;
use App\Models\UMSStudentCourse;
use App\Models\UMSTeacherCourse;
use App\Models\Users;
class UMSController extends Controller
{
    //
    function show(){
        $id=1;
        $department=UMSDepartment::where('id',$id)->first();
       //return $department->teachers;
        // echo $department;
        // echo '<br>';
        //echo $department->courses;
        $courses=UMSCourses::where('id',$id)->first();
        //return $courses->department;
        $course_teacher=UMSTeacherCourse::where('id',$id)->first();
        //echo $course_teacher->teacher->name;
        $student_course=UMSStudentCourse::where('id',$id)->first();
        return $department->courses;
        return $department->courses[0]->teacherCourse->teacher->name;
         return view('Department.dept')
         ->with('dname',[$department])
         ->with('department',$department->courses)
         ->with('course_teacher',[$course_teacher->teacher]);
        // //  $student=UMSStudent::where('id',$id)->first();
        // // return $student->department;
        //  $teacher=UMSTeacher::where('id',$id)->first();
        // //return $teacher->department;//->departmentTeacher;
        // //$course=UMSCourses::where('id',$id)->first();
        // //return $course->department;
        // $s_c=UMSStudentCourse::where('id',$id)->first();
            //echo ($s_c->student);
        //  return view('Department.dept')
        //  ->with('department',$department->students)
        //  ->with('student',[$student->department])
        //  ->with('teacher',$department->teachers);

 
    }
    function login(){
        return view('UMS.user.login');
    }
    function loginSubmit(Request $req)
    {
        $user = Users::where('id',$req->id)
                            ->where('password',$req->pass)->first();

        if($user){
            //session()->flash('msg','User Exists');
             session()->put('logged',$user->id);
             if($user->type){
                 
             }
            //var_dump();
            // var_dump($user->id);
            // return $user->id;
            //return session()->get('logged');
             return redirect()->route('ums.dash');
            //return "Found";

        }
        else {
         session()->flash('msg','User not valid');
         return back();
        //return "Not found";
        }

    }
    function dashboard(){

        $user = Users::where('id',session()->get('logged'))->first();
        //return $user;
        return view('UMS.user.dashboard')->with('user',$user);
    }
    function logout(){
        session()->forget('logged');
        session()->flash('msg','Sucessfully Logged out');
        return redirect()->route('user.login');
    }
}
