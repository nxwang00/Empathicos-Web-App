<?php

namespace App\Http\Resources\Api\Store\v1\Badge;

use App\Favorite;
use App\Save;
use Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class BadgeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if(isset($request->user_id)){
            $favorite = Favorite::where(['user_id' => $request->user_id, 'badge_id' => $this->id])->first();
            $save = Save::where(['user_id' => $request->user_id, 'badge_id' => $this->id])->first();
        }
        else{
            $favorite = Favorite::where(['user_id' => $request->user('api')->id, 'badge_id' => $this->id])->first();
            $save     = Save::where(['user_id' => $request->user('api')->id, 'badge_id' => $this->id])->first();
        }
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
            'image'       => asset('storage/badges/' . $this->image),
            'favorite'    => (!empty($favorite)) ? true : false,
            'save'        => (!empty($save)) ? true : false,
            'created_at'  => (string) $this->created_at,
            'updated_at'  => (string) $this->updated_at,
        ];
    }
}
