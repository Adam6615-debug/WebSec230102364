<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users"; // Ensure lowercase if Laravel default

    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $hidden = ['password', 'remember_token']; // Hides password in JSON responses

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
