<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['first_name', 'last_name', 'image', 'email', 'favourite'];

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function getFullNameAttribute()
    {
        return "$this->first_name $this->last_name";
    }
}
