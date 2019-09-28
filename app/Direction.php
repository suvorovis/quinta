<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function professions()
    {
        return $this->belongsToMany(Profession::class);
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class);
    }
}
