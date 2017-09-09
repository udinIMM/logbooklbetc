<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
  protected $table = 'log';
  public $incrementing = false;
  public $timestamps = false;

  public function user(){
    return $this->belongsTo('App\Users');
  }
}
