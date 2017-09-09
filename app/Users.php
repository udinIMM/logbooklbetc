<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
  protected $table = 'users';
  public $incrementing = false;
  public $timestamps = false;

  public function logs(){
    return $this->hasMany('App\Log', 'users_id', 'id');
  }

  public function laboratorium(){
    return $this->belongsTo('App\Laboratorium');
  }
}
