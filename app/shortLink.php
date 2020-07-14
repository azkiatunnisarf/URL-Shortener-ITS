<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shortLink extends Model
{
    protected $fillable = [
        'code', 'link'
    ];
}
