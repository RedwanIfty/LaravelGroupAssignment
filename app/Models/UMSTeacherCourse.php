<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UMSTeacher;
use App\Models\UMSCourses;
class UMSTeacherCourse extends Model
{
    use HasFactory;
    protected $table="teacher_course";
    public function teacher(){
        return $this->belongsTo(UMSTeacher::class,'t_id','id');
    }
    public function course(){
        return $this->belongsTo(UMSCourses::class,'c_id','id');
    }
}
