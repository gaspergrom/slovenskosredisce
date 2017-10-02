<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BusinessEvent extends Model
{

    use HasTranslations;

    protected $guarded = [];

    protected $translatable = ['excerpt'];

    protected $dates = ['created_at', 'updated_at', 'begins_at'];

    public function formBeginsAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
}
