<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $fillable = ['course_name','course_code','dept_id','teacher_id'];
}
