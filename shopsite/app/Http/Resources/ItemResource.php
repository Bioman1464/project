<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'color' => $this->color,
            'discription' => $this->discription,
            'categories' => CategoryResource::collection($this->categories),
            'created_at' => (string)$this->created_at,
        ];
    }
}
