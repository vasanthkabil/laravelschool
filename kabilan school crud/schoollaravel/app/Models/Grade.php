<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Subject;



class Grade extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->hasMany(Student::class,'grade_id','id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
