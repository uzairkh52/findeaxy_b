<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $guarded = [];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title', 'car_make', 'car_model', 'id']
            ]
        ];
    }

    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'category_id',
        'user_id',
        'title',
        'description',
        'car_make',
        'car_model',
        'car_year',
        'car_drive_km',
        'car_fuel',
        'registration_city',
        'car_documents',
        'assembly',
        'transmission',
        'features',
        'condition',
        'price',
        'car_images',
        'location',
        'status',
    ];
}