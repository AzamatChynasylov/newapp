<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    //
    protected $guarded = [];

    public function questionnare()
    {
        return $this->belongsTo(Questionnare::class);
    }

    public function surveyresponses()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
