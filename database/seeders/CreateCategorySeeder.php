<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'namaKategori' => 'Sarapan',
            ],
            [
                'namaKategori' => 'Cokelat dan Permen',
            ],
            [
                'namaKategori' => 'Makanan Instan',
            ]
            ];
            foreach ($category as $key => $value) {
                Category::insert($value);
            }
    }
}
