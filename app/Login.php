<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
protected $table="logins";
protected $fillable=['reg_id','email','password','type'];

public function booksdetails()
{
    return $this->hasone('App\Booksdetails');
}

}
