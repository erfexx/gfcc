<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = 'members';

    protected $fillable = [
        'fullname','nickname','email','address',
        'gene_id','phone','birthdate','gender',
        'photo_url',
    ];
}
