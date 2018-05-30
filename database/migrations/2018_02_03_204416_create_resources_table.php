<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('summary');
            $table->string('bio');
            $table->string('storyteller');
            $table->string('interviewer');
            $table->string('time_of_story');
            $table->string('time_of_interview');
            $table->string('location');
            $table->string('notes');
            $table->string('sound');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('user_id')->index();
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
        Schema::dropIfExists('resources');
    }
}
