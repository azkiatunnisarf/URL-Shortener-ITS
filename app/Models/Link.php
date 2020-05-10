<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'link';

    protected $fillable = [
        'link_asli','link_pendek'
    ];
}
