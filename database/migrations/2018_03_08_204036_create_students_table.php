<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->char('student_name',50);
            $table->char('father_name',50);
            $table->char('mother_name',50);
            $table->char('nationality',50);
            $table->text('dob');
            $table->integer('mobile')->unique();
            $table->string('school_name',100);
            $table->char('ssc_dept');
            $table->integer('ssc_gpa');
            $table->integer('ssc_role');
            $table->string('college_name',100);
            $table->char('hsc_dept');
            $table->integer('hsc_gpa');
            $table->integer('hsc_role');
            $table->integer('uni_id')->unique();
            $table->char('uni_dept');
            $table->char('advisor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
