<?php

namespace App\Http\Resources;

use App\Models\Bike;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MyProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            // 'id' => $this->id,
            // 'description'=>$this->desccription,
            // 'status' => $this->status,
            'first_name' => $this->first_name,
            // CarResource::collection(Car::all(), 200),
            // BikerResource::collection(Bike::all(), 200),
            'car' => new CarCollection($this->car),

        ];
    }
    
}