<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = [];
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title', 'laptop_brand', 'condition', 'id']
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
        'laptop_brand',
        'condition',
        'price',
        'laptop_images',
        'location',
    ];
}