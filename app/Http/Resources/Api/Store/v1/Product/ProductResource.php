<?php

namespace App\Http\Resources\Api\Store\v1\Product;

use App\Category;
use DB;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $product_images = [];
        $galleries      = DB::table('product_images')->where('product_id', $this->id)->get();
        foreach ($galleries as $key => $gallery) {
            $data['id']         = $gallery->id;
            $data['image']      = asset('storage/products/galleries/' . $gallery->image);
            $data['product_id'] = $gallery->product_id;
            $data['created_at'] = (string) date(config()->get('constants.date_time'), strtotime($gallery->created_at));
            $data['updated_at'] = (string) date(config()->get('constants.date_time'), strtotime($gallery->updated_at));
            $product_images[]   = $data;
        }

        return [
            'id'              => $this->id,
            'name'            => $this->name,
            'price'           => $this->price,
            'description'     => $this->description,
            'images'          => asset('storage/products/images/' . $this->image),
            'status'          => $this->status,
            'reviews'         => $this->reviews,
            'average_reviews' => $this->getAveragereviews(),
            'categories'      => Category::where('status', 1)->whereIn('id', json_decode($this->categories))->get(),
            'shipping_charges'       => get_setting_field('shipping_charges'),
            'galleries'       => $product_images,
            'created_at'      => (string) $this->created_at,
            'updated_at'      => (string) $this->updated_at,
        ];

    }
}
