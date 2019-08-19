<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title'  => $this->title,
            'media_format' => $this->media_format,
            'length' => $this->length,
            'release_year'   => $this->release_year,
            'rating' => $this->rating,
        ];
    }

}
