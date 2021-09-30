<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded =[];

    // Order one to many Order Detail
    public function orderdetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
