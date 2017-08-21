<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Event extends Model
{

    use HasTranslations;

    protected $guarded = [];

    protected $translatable = [ 'name', 'description', 'excerpt' ];

    protected $dates = [ 'begins_at', 'ends_at', 'updated_at', 'created_at' ];

    public function scopeLatest($query, $number = 1)
    {
        return $query->orderBy('created_at', 'DESC')->limit($number);
    }

    public function scopeInFuture($query)
    {
        return $query->where('begins_at', '>', date('Y.m.d'));
    }
}
