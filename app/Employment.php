<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id', 'profession_id', 'from', 'to', 'organization'
    ];
}
