<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
