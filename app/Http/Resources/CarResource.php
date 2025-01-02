<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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

            // 'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
            'title' => $this->title,
            'description' => $this->description,
            'car_make' => $this->car_make,
            'car_model' => $this->car_model,
            'car_year' => $this->car_year,
            'car_drive_km' => $this->car_drive_km,
            'car_fuel' => $this->car_fuel,
            'registration_city' => $this->registration_city,
            'car_documents' => $this->car_documents,
            'assembly' => $this->assembly,
            'transmission' => $this->transmission,
            'features' => $this->features,
            'condition' => $this->condition,
            'price' => $this->price,
            'car_images' => $this->car_images,
            'location' => $this->location,
            'status' => $this->status,
        ];
    }
}