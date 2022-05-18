<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookzzzappliedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookzzzapplieds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('books_no');
            $table->string('books_name');
            $table->string('auther_name');
            $table->string('publisher_name');
            $table->string('location');
            $table->string('type');
            $table->string('image');
           
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
        Schema::dropIfExists('bookzzzapplieds');
    }
}
