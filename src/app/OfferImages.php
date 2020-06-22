<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferImages extends Model
{
    protected $fillable = ['offer_id', 'image'];

    public function offer()
    {
        return $this->belongsTo('App\Offer')->withDefault();
    }
}
