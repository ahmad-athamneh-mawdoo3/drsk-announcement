<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InboxMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inbox', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->unsignedBigInteger('reciever_id')->nullable();
            $table->string('title',300)->nullable();
            $table->text('body')->nullable();
            $table->unsignedBigInteger('files_id')->nullable();
            $table->unsignedBigInteger('read')->nullable();
            $table->unsignedBigInteger('announcment_id')->nullable();
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
        Schema::dropIfExists('inbox');
    }
}
