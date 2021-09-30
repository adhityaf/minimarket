<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded= [];

    // Product one to one Category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Product one to many Order
    public function order(){
        return $this->hasMany(Order::class);
    }
}
