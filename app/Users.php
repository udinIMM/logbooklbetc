<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
	use Notifiable;
	
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
