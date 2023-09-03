<?php

namespace App\Http\Resources;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property int $survey_id
 * @property BelongsTo $survey
 * @property string $start_date
 * @property string $end_date
 */
class SurveyAnswerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'survey' => new SurveyResource($this->survey),
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ];
    }
}
