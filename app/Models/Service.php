<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable=["name","description","price","duration","image"];

    public function bookings(){
      return $this->belongsToMany(Booking::class);
    }
    public function detail(){
      return $this->hasOne(ServiceDetail::class);
    }
}
