<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\RoleUsers
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoleUsers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoleUsers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RoleUsers query()
 * @mixin \Eloquent
 */
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
