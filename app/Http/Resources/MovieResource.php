<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'story' => $this->story,
            'year' => $this->year,
            'cover' => $this->cover,
            'rating' => $this->rating,
            'length' => $this->length,
            'meta' =>  MetaResource::collection($this->metas),
            'media' =>  MediaResource::collection($this->medias),
            
        ];
    }
}
