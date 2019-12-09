<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public $table = 'files';
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'filenames ',
        'created_at',
        'updated_at',
    ];
}
