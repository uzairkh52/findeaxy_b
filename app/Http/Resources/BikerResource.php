<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BikerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
        'id' => $this->id,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        'category_id' => $this->category_id,
        'user_id' => $this->user_id,
        'title' => $this->title,
        'description' => $this->description,
        'bike_make' => $this->bike_make,
        'bike_year' => $this->bike_year,
        'condition' => $this->condition,
        'price' => $this->price,
        'bike_images' => $this->bike_images,
        'location' => $this->location,
        ];
    }
}