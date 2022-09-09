<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Country
 *
 * @property int $country_id
 * @property string $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\State[] $states
 * @property-read int|null $states_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Country whereCountryId($value)
 * @mixin \Eloquent
 */
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
        return $this->hasMany('App\State');
    }
}
