<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['user_id','villa_id','start_date','end_date'];

    public function Villa()
    {
      return $this->belongsTo('App\Villa');
    }

    public function User()
    {
      return $this->belongsTo('App\User');
    }
}
