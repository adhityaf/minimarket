<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $guarded= [];

    // Category one to many Product
    public function products(){
        return $this->hasMany(Product::class);
    }
}
