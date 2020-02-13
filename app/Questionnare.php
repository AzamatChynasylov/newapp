<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnare extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
