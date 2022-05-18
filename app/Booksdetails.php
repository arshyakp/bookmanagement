<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booksdetails extends Model
{
    protected $table="booksdetails";
    protected $fillable=['books_no','books_name','auther_name','publisher_name','location','image','type'];

 public function logins()
 {
     return $this->belongTo('App\Login');
 }
}
