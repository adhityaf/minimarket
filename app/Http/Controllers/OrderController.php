<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function showOrder(Order $order){
        $order = Order::get();
        return view('kasir.order.v_showorder', compact('order'));
    }

    public function addorder(OrderDetail $orderDetail, Product $product){
        $orderDetail = OrderDetail::where('order_id', NULL)->get();
        $product = Product::get();
        return view('kasir.order.v_addorder', compact('orderDetail','product'));
    }

    public function orderForm(OrderDetail $orderDetail){
        $orderDetail = OrderDetail::where('order_id', NULL)->where('statusDetail', 0)->get();
        // dd($orderDetail == NULL);
        return view('kasir.order.v_orderform', compact('orderDetail'));
    }

    public function checkout(OrderDetail $orderDetail){
        Request()->validate([
            'nominalBayar' => ['required', 'integer'],
            'metodeBayar' => ['required'],
        ],[
            'nominalBayar.required' => 'Nominal Bayar Wajib Diisi!',
            'nominalBayar.integer' => 'Nominal Bayar Harus Berupa Angka!',
            'metodeBayar.required' => 'Metode Bayar Wajib Diisi!',
        ]);

        $orderDetail = OrderDetail::where('order_id', NULL)->get();

        $today = Carbon::now();
        $total = 0;
        foreach($orderDetail as $data){
            $total += $data->subtotal;
        }
        foreach ($orderDetail as $data) {
            // dd($data);
            Product::where('id', $data->product_id)
            ->update([
                'stokProduk' => $data->product->stokProduk - $data->jumlahOrder,
            ]);
        }

        foreach ($orderDetail as $data) {
            $product = Product::where('id', $data->product_id)->get();
            foreach ($product as $item) {
                if($item->category_id == 1){
                    Category::where('id', $item->category_id)
                        ->update([
                            'jumlahKategori' => $item->category->jumlahKategori + $item->jumlahOrder,
                        ]);
                }elseif ($item->category_id == 2){
                    Category::where('id', $item->category_id)
                        ->update([
                            'jumlahKategori' => $item->category->jumlahKategori + $item->jumlahOrder,
                        ]);
                }elseif ($item->category_id == 3){
                    Category::where('id', $item->category_id)
                        ->update([
                            'jumlahKategori' => $item->category->jumlahKategori + $item->jumlahOrder,
                        ]);
                }
            }
        }

        if(Request()->nominalBayar < $total){
            return redirect()->back()->with('error', 'Harap Bayar sesuai dengan tagihan!');
        }elseif(Request()->nominalBayar > $total){
            $kembalian = Request()->nominalBayar - $total;
            $data = [
                'tanggal' => $today,
                'total' => $total,
                'nominalBayar' => Request()->nominalBayar,
                'metodeBayar' => Request()->metodeBayar,
                'statusOrder' => 1,
            ];

            $id = Order::create($data)->id;

            OrderDetail::where('order_id', NULL)->update([
                'order_id' => $id,
                'statusDetail' => 1,
            ]);
            return redirect()->route('order')->with('pesan', 'Pesanan Berhasil dicheckout dan silahkan kembalikan uang pelanggan sebanyak Rp. ' . $kembalian);
        }

        $data = [
            'tanggal' => $today,
            'total' => $total,
            'nominalBayar' => Request()->nominalBayar,
            'metodeBayar' => Request()->metodeBayar,
            'statusOrder' => 1,
        ];

        $id = Order::create($data)->id;

        OrderDetail::where('order_id', NULL)->update([
            'order_id' => $id,
            'statusDetail' => 1,
        ]);
        return redirect()->route('order')->with('pesan', 'Pesanan Berhasil dicheckout');
    }


}
