<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'id',
        'userlike_id',
        'postlike_id',
        'created_at',
        'updated_at'
    ];
}
