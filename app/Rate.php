<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $timestamp = true;

    public function student()
    {
    	return $this->belongsTo(Student::class);
    }

    public function class()
    {
    	return $this->belongsTo(Class::class);
    }
}
