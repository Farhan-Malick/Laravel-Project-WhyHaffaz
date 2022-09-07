<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory,Notifiable;
    
    protected $guard = 'admin';

    protected $fillable = [ 'name','phone','country','email','password','gender' ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
