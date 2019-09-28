<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }
}
