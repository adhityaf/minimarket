<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class CreateDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderDetail = [
            [
                'order_id' => NULL,
                'product_id' => 1,
                'jumlahOrder' => 3,
                'subtotal' => 13500,
                'statusDetail' => 0,
            ],
            [
                'order_id' => NULL,
                'product_id' => 4,
                'jumlahOrder' => 2,
                'subtotal' => 30000,
                'statusDetail' => 0,
            ]
            ];
            foreach ($orderDetail as $key => $value) {
                OrderDetail::insert($value);
            }
    }
}
