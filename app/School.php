<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
    	'name',
    	'description',
    ];

    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    public function teachers()
    {
    	return $this->hasMany(Teacher::class);
    }

    public function students()
    {
    	return $this->hasMany(Student::class);
    }
}
