<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morebooks extends Model
{
    protected $table="morebooks";
    protected $fillable=['books_no','books_name','auther_name','publisher_name','location','image','type'];
}
