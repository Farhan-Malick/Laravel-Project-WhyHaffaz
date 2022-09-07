<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{
    use HasFactory, Notifiable;

    protected $table ='appointments';
    protected $fillable = ['id','day','time','Hr_price_per_person'];

    public function teacher()
    {
        return $this->belongsTo('App/Models/Teacher');
    }
}
