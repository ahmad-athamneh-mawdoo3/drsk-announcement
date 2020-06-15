<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsMigration extends Migration
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
            $table->unsignedBigInteger('school_id')->nullable();
            $table->unsignedBigInteger('division_id')->nullable();
            $table->string('nid',300)->nullable();
            $table->string('ar_first_name',300)->nullable();
            $table->string('ar_second_name',300)->nullable();
            $table->string('ar_third_name',300)->nullable();
            $table->string('ar_last_name',300)->nullable();
            $table->string('avatar',300)->nullable();
            $table->string('login_text',300)->nullable();
            $table->string('password',300)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students ');
    }
}
