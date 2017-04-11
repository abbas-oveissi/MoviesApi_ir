<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('year');
            $table->string('rated')->nullable();
            $table->string('released')->nullable();
            $table->string('runtime')->nullable();
            $table->string('director')->nullable();
            $table->string('writer',1000)->nullable();
            $table->string('actors',1000)->nullable();
            $table->string('plot',1000)->nullable();
            $table->string('country');
            $table->string('awards',1000)->nullable();
            $table->string('poster')->nullable();
            $table->string('metascore')->nullable();
            $table->string('imdb_rating')->nullable();
            $table->string('imdb_votes')->nullable();
            $table->string('imdb_id');
            $table->string('type')->nullable();
            $table->boolean('system_data');
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
        Schema::dropIfExists('movies');
    }
}
