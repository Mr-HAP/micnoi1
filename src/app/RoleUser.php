<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\RoleUser
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoleUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoleUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoleUser query()
 * @mixin \Eloquent
 */
class RoleUser extends Model
{
    protected $table = 'role_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'role_id', 'updated_at', 'created_at',
    ];
}
