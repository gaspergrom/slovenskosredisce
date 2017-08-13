<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Event extends Model
{

    use HasTranslations;

    protected $guarded = [];

    protected $translatable = [ 'name', 'description', 'excerpt' ];

    public function scopeLatest($query, $number = 1)
    {
        $query->orderBy('created_at', 'DESC')->limit($number);
    }
}
