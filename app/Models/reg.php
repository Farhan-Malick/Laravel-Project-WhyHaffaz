<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Notifiable;
class reg extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'regs';
    protected $primarykey = 'id';
    protected $fillable = ['name',  'phone', 'country','email','password','gender'];

    public function booking()
    {
        return $this->hasMany(booking::class);
    }
}
