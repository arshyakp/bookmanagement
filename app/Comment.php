<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
protected $table="comments";
protected $fillable=['reg_id','comments'];
public function  Registration()
  {
      return $this->belongsTo('App\Registration');
  }
}
