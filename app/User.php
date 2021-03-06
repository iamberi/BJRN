<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    /**
     * Überprüft ob Nutzer benötigte Berechtigung hat
    */
    public function authorizeRoles($roles)
    {
        if (is_array($roles)){
            return $this->hasAnyRole($roles) || false;
        }
        return $this->hasRole($roles) || false;
    }

    /**
     * überprüft mehrere Rollen
     */
    public function hasAnyRole($roles){
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

     /**
     * überprüft eine Rolle
     */
    public function hasRole($roles){
        return null !== $this->roles()->where('name', $roles)->first();
    }


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

}
