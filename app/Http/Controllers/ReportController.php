<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['index']);
        $this->middleware('auth:api')->only(['get_reports']);
    }

    public function get_reports(Request $request){
        $report = DB::table('order_details')
        ->join('products', 'products.id', '=', 'order_details.id_produk')
        ->select(DB::raw('
            product_name,
            count(*) as jumlah_dibeli,
            harga,  
            Sum(total) as pendapatan, 
            SUM(jumlah) as total_qty'))
        ->whereRaw("date(order_details.created_at) >= '$request->dari'")
        ->whereRaw("date(order_details.created_at) <= '$request->sampai'")
        ->groupBy('id_produk', 'product_name', 'harga')->get();
        return response()->json([
            'data' => $report
        ]);
    }

    public function index(Request $request){
        return view('report.index');
    }
}
