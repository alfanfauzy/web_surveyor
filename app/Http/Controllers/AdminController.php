<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->session()->get('role') == 1) {

            $getBarang = DB::table('tbl_barang')->get();

            return view('admin', ['barang' => $getBarang]);
        } else {
            return redirect('/');
        }
    }

    public function updateStatus($id)
    {
        // update data pegawai
        DB::table('tbl_barang')->where('id', $id)->update([
            'status_barang' => 1
        ]);

        return redirect('admin');
    }
}
