<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cmtz extends Model
{
    protected $table="cmtzs";
    protected $fillable=['book_id','reg_id','comments'];
    public function  Registration()
      {
          return $this->belongsTo('App\Registration');
      }
      public function  Booksdetails()
      {
          return $this->belongsTo('App\Booksdetails');
      }
}
