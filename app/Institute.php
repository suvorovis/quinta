<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class);
    }
}
