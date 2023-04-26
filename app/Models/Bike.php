<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = [];
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title', 'bike_make', 'bike_model', 'id']
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
        'bike_make',
        'bike_year',
        'condition',
        'price',
        'bike_images',
        'location',
    ];
    
}