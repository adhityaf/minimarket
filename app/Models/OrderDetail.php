<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $guarded =[];

    // Order Detail one to one Order
    public function order(){
        return $this->belongsTo(Order::class);
    }

    // Order Detail one to one Product
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
