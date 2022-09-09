<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Offer
 *
 * @property int $offer_id
 * @property int $user_id
 * @property string $title
 * @property string $type
 * @property string $state_id
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $host_gender
 * @property string|null $guest_gender
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\OfferImages[] $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereGuestGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereHostGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Offer whereUserId($value)
 * @mixin \Eloquent
 */
class Offer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','title', 'type', 'state_id', 'description', 'photo','create_at', 'update_at', 'host_gender', 'guest_gender',
    ];

    protected $primaryKey = 'offer_id';

    public function images()
    {
        return $this->hasMany('App\OfferImages', 'offer_id');
    }
}
