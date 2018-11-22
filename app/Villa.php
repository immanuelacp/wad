<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Villa extends Model
{
    use SoftDeletes;
    protected $fillable = ['name','address','photo','price','desc','created_by'];
}
