<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeZones extends Model
{
    //
    protected $table = 'time_zones';

    protected $primaryKey = 'id';
    public $timestamps = false;
}
