<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country'
    ];

    public $timestamps = false;

    public function states()
    {
        return $this->hasMany('App\State')->withDefault();
    }
}
