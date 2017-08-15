<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Gallery extends Model
{

    use HasTranslations;

    protected $guarded = [];

    protected $translatable = [ 'name' ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function image()
    {
        return $this->images->first();
    }
}
