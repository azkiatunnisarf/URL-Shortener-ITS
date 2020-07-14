<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleDatabase extends Model
{
    protected $table = 'sample_database';

    protected $fillable = [
        'sample'
    ];
}
