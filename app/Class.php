<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    protected $timeStamp = true;

    public function teacher()
    {
    	return $this->belongsTo(Teacher::class);
    }

    public function subject()
    {
    	return $this->belongsTo(Subject::class);
    }

    public function bookings()
    {
    	return $this->hasMany(Booking::class);
    }
}
