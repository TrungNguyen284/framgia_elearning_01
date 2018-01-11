<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function student()
    {
    	return $this->belongsTo(Student::class);
    }

    public function class()
    {
    	return $this->belongsTo(Class::class);
    }
}
