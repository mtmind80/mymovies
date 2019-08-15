<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MovieCollectionResource extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($movie){
                return new MovieResource($movie);
            }),
        ];
    }

    public function with($request)
    {
        return [
            'success' => true,
        ];
    }

}
