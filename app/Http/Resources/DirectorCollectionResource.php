<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DirectorCollectionResource extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($Director){
                return new DirectorResource($Director);
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
