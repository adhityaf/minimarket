<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showProduct(Product $product){
        $product = Product::get();
        return view('kasir.product.v_showproduct', compact('product'));
    }

    public function addProduct(Category $category){
        $category = Category::get();
        return view('kasir.product.v_addproduct', compact('category'));
    }

    public function saveProduct(){
        Request()->validate([
            'kodeProduk' => 'required',
            'namaProduk' => 'required',
            'category_id' => 'required',
            'stokProduk' => 'required|integer',
            'hargaProduk' => 'required|integer',
        ], [
            'kodeProduk.required' => 'Kode Produk Wajib Diisi!',
            'namaProduk.required' => 'Nama Produk Wajib Diisi!',
            'category_id.required' => 'Kategori Wajib Diisi!',
            'stokProduk.required' => 'Stok Produk Wajib Diisi!',
            'stokProduk.integer' => 'Stok Produk Harus Berupa Angka!',
            'hargaProduk.required' => 'Harga Produk Wajib Diisi!',
            'hargaProduk.integer' => 'Harga Produk Harus Berupa Angka!',
        ]);
        $data = [
            'kodeProduk' => Request()->kodeProduk,
            'namaProduk' => Request()->namaProduk,
            'category_id' => Request()->category_id,
            'stokProduk' => Request()->stokProduk,
            'hargaProduk' => Request()->hargaProduk,
        ];
        Product::create($data);
        return redirect()->route('product')->with('pesan', 'Produk Berhasil Ditambahkan!');
    }
}
