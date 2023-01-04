<?php

namespace App\Http\Resources\Api\v1\Favorite;

use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data =  [
            'id'         => $this->id,
            'card_id'    => $this->card_id,
            'user_id'     => $this->user_id,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
        
        if($data){
            return successApiResponse('Favorite data', [
                'data' => $data,
            ], 200);
        }
        else{
             return failedApiResponse('No data found', null, 400);
        }
    }
}
