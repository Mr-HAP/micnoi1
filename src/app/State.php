<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\State
 *
 * @property int $state_id
 * @property int $country_id
 * @property string $name
 * @property-read \App\Country $country
 * @method static \Illuminate\Database\Eloquent\Builder|\App\State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\State query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\State whereStateId($value)
 * @mixin \Eloquent
 */
class State extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','country_id'
    ];
    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo('App\Country')->withDefault();
    }
}
