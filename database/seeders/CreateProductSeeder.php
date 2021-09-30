<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'kodeProduk' => 'S1',
                'namaProduk' => "Coklat Meises",
                'category_id' => 1,
                'stokProduk' => 15,
                'hargaProduk' => 4500,
            ],
            [
                'kodeProduk' => 'S2',
                'namaProduk' => "Selai Nanas",
                'category_id' => 1,
                'stokProduk' => 25,
                'hargaProduk' => 12000,
            ],
            [
                'kodeProduk' => "S3",
                'namaProduk' => "Koko Crunch",
                'category_id' => 1,
                'stokProduk' => 20,
                'hargaProduk' => 21000,
            ],
            [
                'kodeProduk' => 'CP1',
                'namaProduk' => "Cadbury Dairy Milk",
                'category_id' => 1,
                'stokProduk' => 15,
                'hargaProduk' => 15000,
            ],
            [
                'kodeProduk' => 'CP2',
                'namaProduk' => "Candy Gummy",
                'category_id' => 1,
                'stokProduk' => 25,
                'hargaProduk' => 8500,
            ],
            [
                'kodeProduk' => "CP3",
                'namaProduk' => "Milo Sereal Bar",
                'category_id' => 1,
                'stokProduk' => 20,
                'hargaProduk' => 6500,
            ]
            ,
            [
                'kodeProduk' => 'MI1',
                'namaProduk' => "Abon Sapi",
                'category_id' => 1,
                'stokProduk' => 15,
                'hargaProduk' => 11000,
            ],
            [
                'kodeProduk' => 'MI2',
                'namaProduk' => "Mi Gelas",
                'category_id' => 1,
                'stokProduk' => 25,
                'hargaProduk' => 7500,
            ],
            [
                'kodeProduk' => "MI3",
                'namaProduk' => "Ufo Mi Goreng",
                'category_id' => 1,
                'stokProduk' => 20,
                'hargaProduk' => 8000,
            ]
            ];
            foreach ($product as $key => $value) {
                Product::insert($value);
            }
    }
}
