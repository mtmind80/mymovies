<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        $admin ='No';
        if($this->is_adminc) {
            $admin ='Yes';
        }
        return [
            'name'  => $this->name,
            'email'  => $this->email,
            'admin'  => $admin,
            'full_name' => $this->full_name,
            'id' => $this->id,
        ];
    }

}
