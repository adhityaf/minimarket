<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function saveOrderDetail(){
        Request()->validate([
            'product_id' => ['required'],
            'jumlahOrder' => ['required', 'integer'],
        ],[
            'product_id.required' => 'Nama Produk Wajib Diisi!',
            'jumlahOrder.required' => 'Jumlah Wajib Diisi!',
            'jumlahOrder.integer' => 'Jumlah harus Berupa Angka!',
        ]);
        $product = Product::where('id', Request()->product_id)->first();

        $detail = OrderDetail::where('product_id', Request()->product_id)->where('statusDetail', 0)->first();
        $subtotal = Request()->jumlahOrder * $product->hargaProduk;
        // dd($detail);
        if($detail == NULL){
            if($product->stokProduk < Request()->jumlahOrder){
                $data = [
                    'order_id' => NULL,
                    'product_id' => Request()->product_id,
                    'jumlahOrder' => $product->stokProduk,
                    'subtotal' => $product->hargaProduk * $product->stokProduk,
                    'statusDetail' => 0,
                ];
                OrderDetail::where('product_id', Request()->product_id)->insert($data);
            }else{
                $data = [
                    'order_id' => NULL,
                    'product_id' => Request()->product_id,
                    'jumlahOrder' => Request()->jumlahOrder,
                    'subtotal' => $product->hargaProduk * Request()->jumlahOrder,
                    'statusDetail' => 0,
                ];
                OrderDetail::insert($data);
            }
        }else{
            if($product->stokProduk < $detail->jumlahOrder + Request()->jumlahOrder){
                $data = [
                    'jumlahOrder' => $product->stokProduk,
                    'subtotal' => $product->hargaProduk * $product->stokProduk,
                ];
                OrderDetail::where('product_id', Request()->product_id)->update($data);
            }else{
                $data = [
                    'jumlahOrder' => $detail->jumlahOrder + Request()->jumlahOrder,
                    'subtotal' => $detail->subtotal + ($product->hargaProduk * Request()->jumlahOrder),
                ];
                OrderDetail::where('product_id', Request()->product_id)->update($data);
            }
        }
        return redirect()->back()->with('pesan', 'Pesanan Berhasil Ditambahkan!');
    }
}
