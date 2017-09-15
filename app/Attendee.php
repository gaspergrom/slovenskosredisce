<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{

    protected $guarded = [];

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }
}
