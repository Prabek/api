<?php

namespace App\Http\Resources\Product;

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
        return [

            'name'=>$this->name,
            'descrioption'=>$this->detail,
            'price'=>$this->price,
            'discount'=>$this->discount,
            'stock'=>$this->stock,



        ];

    }
}
