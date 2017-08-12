<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Leadership extends Model
{

    use HasTranslations;

    protected $guarded = [];

    protected $translatable = [ 'name', 'position' ];
}
