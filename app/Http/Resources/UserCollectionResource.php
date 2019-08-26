<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollectionResource extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->transform(function($User){
                return new UserResource($User);
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
