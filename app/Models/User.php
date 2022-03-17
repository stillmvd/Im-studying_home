<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'identity', 'login', 'email', 'avatar',
        'active', 'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Hash::make($password);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
