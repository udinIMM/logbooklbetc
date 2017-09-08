<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log_lbe extends Model
{
    protected $table = 'log_lbe';
    public $incrementing = false;
    protected $primaryKey = 'id_log';
}
