<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('father_mobile');
            $table->string('father_profession');
            $table->string('mother_name');
            $table->string('mother_mobile');
            $table->string('mother_profession');
            $table->string('email_address')->nullable();
            $table->string('student_mobile');
            $table->string('student_relagion');
            $table->string('student_roll');
            $table->string('student_reg');
            $table->integer('faculty_id');
            $table->integer('department_id');
            $table->integer('levelterm_id');
            $table->integer('session_id');
            $table->string('student_photo')->nullable();
            $table->text('address');
            $table->tinyInteger('status');
            $table->string('password');
            $table->string('encrypted_password');
            $table->integer('user_id');
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
