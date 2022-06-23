<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UMSDepartment;
use App\Models\UMSTeacherCourse;
class UMSTeacher extends Model
{
    use HasFactory;
    protected $table="teachers";
    public function department(){
        return $this->belongsTo(UMSDepartment::class,'d_id','id');
    }
    public function teacherCourse(){
        return $this->hasMany(UMSTeacherCourse::class,'t_id','id');
    }
}
