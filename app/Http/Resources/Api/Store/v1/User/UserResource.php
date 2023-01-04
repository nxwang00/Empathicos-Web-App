<?php

namespace App\Http\Resources\Api\Store\v1\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id'         => $this->id,
            'name'       => $this->name,
            'email'      => $this->email,
            'birthday'   => $this->birthday,
            'about'      => $this->about,
            'device_id'  => $this->device_id,
            'promo_code' => $this->promo_code,
            'image'      => asset('storage/profiles/' . $this->image),
            'status'     => $this->status,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];

    }
}
