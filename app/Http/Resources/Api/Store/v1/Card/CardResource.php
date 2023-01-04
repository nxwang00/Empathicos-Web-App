<?php

namespace App\Http\Resources\Api\v1\Card;

use Illuminate\Http\Resources\Json\JsonResource;

class CardResource extends JsonResource
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
            'message'    => $this->message,
            'morsel'     => $this->morsel,
            'socialize'  => $this->socialize,
            'image'      => asset('storage/cards/' . $this->image),
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
    }
}
