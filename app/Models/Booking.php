<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use HasFactory, Notifiable;

    protected $guard =[];
    protected $fillable = ['id','name','date','no_of_people','description'];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
