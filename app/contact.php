<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table ="contact";
    protected $fillable = [
        'id',
        'name'
    ];
}
