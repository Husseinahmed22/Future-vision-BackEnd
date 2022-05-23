<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'exam_id'    => $this->exam_id,
            'department' => $this->exam->department,
            'collage_id' => $this->collage_id,
            'question'   => $this->question,
            'answers'    => $this->answers ? json_decode($this->answers) : null
        ];
    }
}
