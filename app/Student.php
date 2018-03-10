<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $fillable = ['student_name','father_name','mother_name','nationality','mobile','email','dob','student_photo','school_name','ssc_dept', 'ssc_dept','ssc_role','ssc_gpa','college_name','hsc_dept','hsc_role','hsc_gpa','uni_id','uni_dept','advisor'];


}
