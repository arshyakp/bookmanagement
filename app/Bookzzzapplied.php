<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookzzzapplied extends Model
{
protected $table='bookzzzapplieds';
protected $fillable=['books_no','books_name','auther_name','publisher_name','location','image','type'];
}
