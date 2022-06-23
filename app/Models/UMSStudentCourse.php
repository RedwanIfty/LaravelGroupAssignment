<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UMSStudent;
use App\Models\UMSCourses;

class UMSStudentCourse extends Model
{
    use HasFactory;
    protected $table="student_course";
    public function student(){
        return $this->belongsTo(UMSStudent::class,'s_id','id');
    }
    public function course(){
        return $this->belongsTo(UMSCourses::class,'c_id','id');
    }
}
