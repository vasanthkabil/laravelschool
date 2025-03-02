<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade;
use App\Models\Subject;


class Student extends Model
{
    use HasFactory;

    public function grade()
    {
        return $this->belongsTo(Grade::class,'grade_id','id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
