<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
             $table->increments('id');
             $table->string('image');
             $table->string('name');
             $table->string('designation');
             $table->text('fb_link')->nullable();
             $table->text('twitter_link')->nullable();
             $table->text('google_link')->nullable();
             $table->text('linkedin_link')->nullable();
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
        Schema::dropIfExists('teams');
    }
}
