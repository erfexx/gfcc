<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //
    protected $table = 'attendances';

    protected $fillable = [
        'tanggal','event_id','person_in_charge_id','percentage',
    ];
}
