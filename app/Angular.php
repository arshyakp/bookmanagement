<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angular extends Model
{
    protected $table="angulars";
    protected $fillable=['firstname','lastname'];
}
