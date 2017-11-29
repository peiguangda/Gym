<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regester extends Model
{
    protected $table = 'regesters';
    protected $fillable = [
        'id_user', 'id_action',
    ];
}
