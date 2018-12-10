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
            'description' => $this->description,

            'categories' => CategoryResource::collection($this->categories),
            'created_at' => (string)$this->created_at,
        ];


        /*return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'categories' => CategoryResource::collection($this->categories),
            'created_at' => (string)$this->created_at,
        ];*/
    }
}
