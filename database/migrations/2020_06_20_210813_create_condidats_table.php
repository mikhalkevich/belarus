<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condidats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('who_is')->nullable();
            $table->string('how_is')->nullable();
            $table->string('date_rod')->nullable();
            $table->integer('user_id');
            $table->string('picture')->nullable();
            $table->string('color')->nullable();
            $table->string('status')->nullable();
            $table->integer('counts')->nullable();
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
        Schema::dropIfExists('condidats');
    }
}
