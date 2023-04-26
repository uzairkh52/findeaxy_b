<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = [];
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title', 'mobile_brand', 'condition', 'id']
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
        'mobile_brand',
        'condition',
        'price',
        'mobile_images',
        'location',
    ];
    

}