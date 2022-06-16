<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UMSStudent;

class UMSStudentCourse extends Model
{
    use HasFactory;
    protected $table="student_course";
    public function student(){
        return $this->belongsTo(UMSStudent::class,'s_id','id');
    }
}
