<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Band
 *
 * @property int $band_id
 * @property string $name
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string|null $photo
 * @property string|null $video
 * @property int|null $songs_number
 * @property int|null $members
 * @property int|null $eps
 * @property int|null $discs
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $youtube
 * @property string|null $tocatas
 * @property string|null $concerts
 * @property int|null $hosting
 * @property int|null $amplification
 * @property int $id_admin_band
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereAmplification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereBandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereConcerts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereDiscs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereEps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereHosting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereIdAdminBand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereMembers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereSongsNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereTocatas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Band whereYoutube($value)
 * @mixin \Eloquent
 */
class Band extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','members','country','region','city', 'photo', 'video', 'songs_number', 'eps', 'discs', 'facebook', 'instagram', 'youtube', 'tocatas', 'concerts', 'hosting', 'amplification', 'id_admin_band', 'created_at', 'updated_at'
    ];

    protected $primaryKey = 'band_id';
}
