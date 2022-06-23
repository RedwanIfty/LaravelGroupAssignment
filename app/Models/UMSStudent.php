<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UMSDepartment;
use App\Models\UMSStudentCourse;

class UMSStudent extends Model
{
    use HasFactory;
    protected $table="students";
    public $timestamps= false;
    public function department(){
        return $this->belongsTo(UMSDepartment::class,'d_id','id');
    }
    public function studentCourse(){
        return $this->hasMany(UMSStudentCourse::class,'s_id','id');
    }
}
