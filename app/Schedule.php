<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Schedule extends Model
{

    use HasTranslations;

    protected $guarded = [];

    protected $translatable = [ 'opponent', 'location' ];
}
