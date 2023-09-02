<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class SurveyQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'question',
        'description',
        'data',
        'survey_id',
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
