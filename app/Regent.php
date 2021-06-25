<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Regent extends Model
{
    use SoftDeletes;
    protected $fillable = ['RegentName'];

}
