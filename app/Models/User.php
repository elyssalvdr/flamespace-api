<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'student_number',
        'email',
        'name',
        'roles',
        'permissions',
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}