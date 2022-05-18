<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userview extends Model
{
 protected $table="userviews";
 protected $fillable=['book_id','reg_id'];
  public function  Registration()
  {
      return $this->belongsTo('App\Registration');
  }
}
