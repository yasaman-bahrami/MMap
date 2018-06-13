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
            $table->string('title');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('storyteller');
            $table->string('attribute1');
            $table->string('attribute2');
            $table->string('summary');
            $table->string('bio');
            $table->string('interviewer');
            $table->string('time_of_story');
            $table->string('permission');
            $table->string('date_requested');
            $table->string('date_confirmed');
            $table->string('notes1');
            $table->string('notes2');
            $table->integer('user_id')->index();
            $table->string('sound');
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
