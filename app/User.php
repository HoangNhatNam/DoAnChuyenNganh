<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'FullName', 'Certificate_id', 'Level_id', 'Address',
        'Phone', 'Org', 'Office', 'Position', 'Active', 'Type', 'regent_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function level()
    {
        return $this->belongsTo(Level::class, 'Level_id');
    }
    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'Certificate_id');
    }
    public function regent()
    {
        return $this->belongsTo(Regent::class, 'regent_id');
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }
    public function checkPermissionAccess($permissionCheck)
    {
        $roles = auth()->user()->roles;
        foreach ($roles as $role){
            $permissions = $role->permissions;
            if ($permissions->contains('key_code', $permissionCheck)){
                return true;
            }
        }
        return false;
    }

}
