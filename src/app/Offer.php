<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','title', 'type', 'state_id', 'description', 'photo','create_at', 'update_at',
    ];
    protected $primaryKey = 'offer_id';
}
