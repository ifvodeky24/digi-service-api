<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;
    protected $table = 'review';
    protected $primaryKey = 'id';
}
