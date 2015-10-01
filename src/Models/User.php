<?php

namespace IntoTheSource\Users\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\User as DefaultUserModel;

class User extends DefaultUserModel
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get all the roles that belong to this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }
}
