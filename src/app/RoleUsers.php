<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUsers extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'role_id', 'updated_at', 'created_at',
    ];
}
