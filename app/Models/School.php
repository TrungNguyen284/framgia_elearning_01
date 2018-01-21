<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name',
        'description',
        'city_id',
    ];

    public function saveSchool($data)
    {
        $this->name = $data['name'];
        $this->city = $data['city'];
        $this->save();
    }

    public function updateSchool($data)
    {
        $school = $this->find($data['id']);
        $school->name = $data['name'];
        $school->city = $data['city'];
        $school->save();
    }

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
