<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function hitungPajak(Request $request)
    {
        // Ambil input total harga dan persen pajak
        $total = $request->input('total');
        $persen_pajak = $request->input('persen_pajak');

        // Validasi input
        if (!$total || !$persen_pajak || $persen_pajak <= 0) {
            return response()->json([
                'error' => 'Input tidak valid, pastikan total dan persen_pajak diisi dengan angka yang benar.'
            ], 400);
        }

        // Hitung Net Sales dan Pajak
        $net_sales = $total / (1 + ($persen_pajak / 100));
        $pajak_rp = $total - $net_sales;

        // Return JSON
        return response()->json([
            'net_sales' => number_format($net_sales, 2, '.', ''),
            'pajak_rp' => number_format($pajak_rp, 2, '.', '')
        ], 200);
    }
}
