<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserDetail
 *
 * @property int $id_user_detail
 * @property int $id_user
 * @property string $country
 * @property string $city
 * @property string $photo
 * @property string $video
 * @property string $facebook
 * @property string $instagram
 * @property string $youtube
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereIdUserDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereYoutube($value)
 * @mixin \Eloquent
 */
class UserDetail extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user_detail','id_user','country','city','photo','video','facebook','instagram','youtube'
    ];

    public function user()
    {
        return $this->hasOne('App\User')->withDefault();
    }
}
