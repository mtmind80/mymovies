<?php

namespace App\Http\Resources;

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
            'Name'  => $this->name,
            'Email'  => $this->email,
            'Admin'  => $admin,
            'ID' => $this->id,
        ];
    }

}
