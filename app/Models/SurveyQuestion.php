<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Surveyl;

class SurveyQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'question','data','type','survey_id', 'descripiton' 
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
