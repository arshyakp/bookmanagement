<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
protected $table="registrations";
protected $fillable=['firstname','lastname','address','phnumber'];
 public function userview()
 {
     return $this->hasOne('App\userview');
 }
 public function Cmtz()
 {
     return $this->hasOne('App\Cmtz');
 }
}
