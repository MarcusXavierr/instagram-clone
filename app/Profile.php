<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/6UNLlp6jJpBghd07gatKbW5JHPMKva3TuQaR0CML.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user ()
    {
        return $this->belongsTo(User::class); 
    }
}
