<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned(); 
            $table->foreign('book_id')->references('id')->on('booksdetails');
            $table->integer('reg_id')->unsigned(); 
            $table->foreign('reg_id')->references('id')->on('registrations');
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
        Schema::dropIfExists('userviews');
    }
}
