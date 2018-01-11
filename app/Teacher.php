<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
    	'email',
    	'name',
    	'password',
    ];

    protected $hidden = [
    	'password',
    	'remember_token',
    ];

    public function classes()
    {
    	return $this->hasMany(Class::class);
    }

    public function school()
    {
    	return $this->belongsTo(School::class);
    }
}
