<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends  Authenticatable
{
    use  HasFactory;
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isAdmin()
    {
        return $this->role->name === 'admin';
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
