<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

/**
* @property int $id
* @property string $image
* @property string $title
* @property string $slug
* @property bool $status
* @property string $description
* @property string $created_at
* @property string $updated_at
* @property string $expire_date
* @property array $questions
 */
class SurveyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'image_url' => $this->image ? URL::to($this->image) : null,
            'title' => $this->title,
            'slug' => $this->slug,
            'status' => $this->status !== 'draft',
            'description' => $this->description,
            'created_at' => (new \DateTime($this->created_at))->format('Y-m-d H:i:s'),
            'updated_at' => (new \DateTime($this->updated_at))->format('Y-m-d H:i:s'),
            'expire_date' => $this->expire_date ? (new \DateTime($this->expire_date))->format('Y-m-d') : null,
            'questions' => SurveyQuestionResource::collection($this->questions),
        ];
    }
}
