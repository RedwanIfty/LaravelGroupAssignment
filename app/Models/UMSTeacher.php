<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UMSDepartment;

class UMSTeacher extends Model
{
    use HasFactory;
    protected $table="teachers";
    public function department(){
        return $this->belongsTo(UMSDepartment::class,'d_id','id');
    }
}
