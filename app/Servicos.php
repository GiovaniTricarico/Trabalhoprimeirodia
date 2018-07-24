<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicos extends Model
{
    use SoftDeletes;

    protected $fillable = ['tipo'];
}