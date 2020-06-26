<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $guarded = [];
     
    public function comment()
    {
        return $this->belongsTo(User::class);
    }
}
