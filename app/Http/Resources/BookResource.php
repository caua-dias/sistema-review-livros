<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'title' => $this->title,
            'synopsis' => $this->synopsis,
            'author' => new AuthorResource($this->whenLoaded('author')),
            'reviews' => ReviewResource::collection($this->whenLoaded('reviews')),
        ];

        return $data;
    }
}
