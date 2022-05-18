<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppiledusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appiledusers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned(); 
            $table->foreign('book_id')->references('id')->on('bookzzzapplieds');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('phnumber');
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
        Schema::dropIfExists('appiledusers');
    }
}
