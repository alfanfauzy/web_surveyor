<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyorController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->session()->get('role') == 2) {
            $getBarang = DB::table('tbl_barang')
                ->get();

            return view('surveyor', ['barang' => $getBarang]);
        } else {
            return redirect('/');
        }
    }

    public function add(Request $request)
    {
        $submit = $request->submit;
        $nama_barang = $request->nama_barang;
        $harga_barang = $request->harga_barang;
        $satuan_barang = $request->satuan_barang;
        $pasar = $request->pasar;
        $tanggal_survey = $request->tanggal_survey;
        $petugas = $request->petugas;

        if ($submit == "Submit") {
            DB::table('tbl_barang')->insert([
                'nama_barang' => $nama_barang,
                'harga_barang' => $harga_barang,
                'satuan_barang' => $satuan_barang,
                'pasar' => $pasar,
                'tanggal_survey' => $tanggal_survey,
                'status_barang' => 0,
                'surveyor' => $petugas,
            ]);
        }

        return redirect('surveyor');
    }
}
