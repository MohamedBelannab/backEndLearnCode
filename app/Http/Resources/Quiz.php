<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Quiz extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'description' => $this->quiz->description,
            'titre' => $this->quiz->titre,
            'question'  => $this->quiz->question ,
        ];
    }
}
