<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $guarded = [];

    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }
}
