<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Model {
    use HasFactory, HasApiTokens;
    public $timestamps = false;
    // const UPDATED_AT = 'updated_date';
    // const CREATED_AT = 'creation_date';
}