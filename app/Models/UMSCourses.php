<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UMSDepartment;
use App\Models\UMSStudentCourse;
use App\Models\UMSTeacherCourse;

class UMSCourses extends Model
{
    use HasFactory;
    protected $table="courses";
    public function department(){
        return $this->belongsTo(UMSDepartment::class,'d_id','id');
    }
    public function studentCourse(){
        return $this->hasMany(UMSStudentCourse::class,'c_id','id');
    }
    public function teacherCourse(){
        return $this->hasMany(UMSTeacherCourse::class,'c_id','id');
    }
}
