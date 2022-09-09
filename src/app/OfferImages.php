<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\OfferImages
 *
 * @property int $id
 * @property int $offer_id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Offer $offer
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OfferImages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OfferImages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OfferImages query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OfferImages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OfferImages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OfferImages whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OfferImages whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\OfferImages whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OfferImages extends Model
{
    protected $fillable = ['offer_id', 'image'];

    public function offer()
    {
        return $this->belongsTo('App\Offer')->withDefault();
    }
}
