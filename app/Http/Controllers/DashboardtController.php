<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardtController extends Controller
{
    public function dashboard(Category $category){
        $order = Order::where('statusOrder', 1)->get();
        $category = Category::orderByDesc('jumlahKategori')->get();
        return view('kasir.v_dashboard', compact('order', 'category'));
    }
}
