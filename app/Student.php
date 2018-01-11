<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'email',
    	'password',
    	'name',
    ];

    protected $hidden = [
    	'password',
    	'remember_token',
    ];

    public function school()
    {
    	return $this->belongsTo(School::class);
    }

    public function bookings()
    {
    	return $this->hasMany(Booking::class);
    }

    public function rates()
    {
    	return $this->hasMany(Rate::class);
    }
}
