<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'user_id' => new UserResource(User::find( $this->user_id )),
            'movie_id' => $this->movie_id,
            'rating' => $this->rating,
            'body' => $this->body,
        ];
    }
}
