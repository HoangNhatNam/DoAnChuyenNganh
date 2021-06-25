<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded= [];
    public function permissionChidrent()
    {
        return $this->hasMany(Permission::class, 'parent_id');
    }
}
