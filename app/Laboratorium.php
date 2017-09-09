<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    protected $table = 'laboratorium';
    public $incrementing = false;

    public function users{
      return $this->hasMany('App\Users', 'laboratorium_id', 'id');
    }
}
