<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title'  => $this->title,
            'length' => $this->length,
            'year'   => $this->year,
            'rating' => $this->rating,
        ];
    }

}
