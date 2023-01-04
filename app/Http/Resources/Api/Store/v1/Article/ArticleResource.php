<?php

namespace App\Http\Resources\Api\Store\v1\Article;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'id'          => $this->id,
            'title'       => $this->title,
            'description' => $this->description,
            'image'       => asset('storage/articles/' . $this->image),
            'status'      => $this->status,
            'created_at'  => (string) $this->created_at,
            'updated_at'  => (string) $this->updated_at,
        ];
    }
}
