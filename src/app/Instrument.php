<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Instrument
 *
 * @property int $idinstrument
 * @property string $name_instrument
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instrument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instrument newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instrument query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instrument whereIdinstrument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instrument whereNameInstrument($value)
 * @mixin \Eloquent
 */
class Instrument extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_instrument'
    ];
    public $timestamps = false;
}
