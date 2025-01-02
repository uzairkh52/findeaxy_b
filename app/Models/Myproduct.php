<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyProduct extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','my_product_name','my_product_type','my_product_type_id','my_product_id'];

    // Polymorphic relationships with specific product types
    public function myproductable()
    {
        return $this->morphTo();
    }

}
