<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengunjungController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->session()->get('role') == "3") {

            $getBarang = DB::table('tbl_barang')
                ->where('status_barang', '1')
                ->get();

            return view('pengunjung', ['barang' => $getBarang]);
        } else {
            return redirect('/');
        }
    }
}
