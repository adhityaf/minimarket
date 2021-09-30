<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ReportController extends Controller
{
    public function day(Order $order){
        $today = Carbon::now();
        $order = Order::where('statusOrder', 1)->whereDate('tanggal', $today)->get();
        return view('kasir.report.v_day', compact('order'));
    }

    public function filterDay(Request $request){
        $waktu = $request->input('filter');
        $waktu1 = strtotime($waktu);
        $hari = date("d", $waktu1);
        $bulan = date("m", $waktu1);
        $tahun = date("Y", $waktu1);
        // dd($waktu, $waktu1, $hari, $bulan, $tahun);

        $order = Order::where('statusOrder', 1)->whereDay('tanggal', $hari)->whereMonth('tanggal', $bulan)->whereYear('tanggal', $tahun)->get();
        return view('kasir.report.v_day', compact('order'));
    }

    public function rentangDay(Request $request){
        $start = Request()->tanggalAwal;
        $end = Request()->tanggalAkhir;

        // dd($start, $end);
        $order = Order::whereDate('tanggal','>=',$start)->whereDate('tanggal','<=',$end)->orderBy('tanggal')->get();
        return view('kasir.report.v_day', compact('order'));
    }

    public function month(Order $order){
        $order = Order::where('statusOrder', 1)->get();
        return view('kasir.report.v_month', compact('order'));
    }

    public function filterMonth(Request $request){
        $waktu = $request->input('filter');
        $waktu1 = strtotime($waktu);
        $bulan = date("m", $waktu1);
        $tahun = date("Y", $waktu1);

        $order = Order::where('statusOrder', 1)->whereMonth('tanggal', $bulan)->whereYear('tanggal', $tahun)->get();
        return view('kasir.report.v_month', compact('order'));
    }

    public function kategori(Order $order, Category $category){
        $order = Order::where('statusOrder', 1)->get();
        $category = Category::orderByDesc('jumlahKategori')->get();
        return view('kasir.report.v_kategori', compact('order', 'category'));
    }
}
