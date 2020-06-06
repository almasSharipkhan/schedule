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
            $table->id();
            $table->integer('iitu_id')->unique();
            $table->enum('status', [
                1 => "Отчислен",
                2 => "Обучающийся",
                3 => "Абитурент",
            ]);
            $table->string('IIN');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->enum('course_number', [
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
            ]);
            $table->integer('spec_id')->unsigned();
            $table->foreign('spec_id')->references('id')->on('specialties');
            $table->enum('pay_form', [
                1 => "Платный",
                2 => "Бесплатный",
                3 => "Мобильность",
            ]);
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
