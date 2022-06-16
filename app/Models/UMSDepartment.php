<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UMSStudent;
use App\Models\UMSTeacher;
use App\Models\UMSCourses;

class UMSDepartment extends Model
{
    use HasFactory;
    protected $table="departments";
    public $timestamps= false;
    public function students(){
        return $this->hasMany(UMSStudent::class,'d_id','id');
    }
    public function teachers(){
        return $this->hasMany(UMSTeacher::class,'d_id','id');
    }
    public function courses(){
        return $this->hasMany(UMSCourses::class,'d_id','id');
    }
}
