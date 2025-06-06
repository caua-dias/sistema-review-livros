<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
            'id' => $this->id,
            'grade' => $this->grade,
            'text' => $this->text,
            'reader' => new ReaderResource($this->whenLoaded('reader')),
        ];


        return $data;
    }
}
