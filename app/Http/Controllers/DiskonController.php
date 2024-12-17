<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiskonController extends Controller
{
    public function hitungDiskon(Request $request)
    {
        // Validasi input
        $request->validate([
            'discounts' => 'required|array',
            'discounts.*.diskon' => 'required|numeric|min:0|max:100',
            'total_sebelum_diskon' => 'required|numeric|min:0'
        ]);

        // Ambil input
        $total_sebelum_diskon = $request->input('total_sebelum_diskon');
        $discounts = $request->input('discounts');

        $total_diskon = 0; // Total diskon dalam rupiah
        $harga_setelah_diskon = $total_sebelum_diskon;

        // Hitung diskon bertingkat
        foreach ($discounts as $diskon) {
            $diskon_percent = $diskon['diskon'];

            // Hitung diskon untuk iterasi ini
            $diskon_rupiah = ($harga_setelah_diskon * $diskon_percent) / 100;

            // Tambahkan ke total diskon
            $total_diskon += $diskon_rupiah;

            // Kurangi harga setelah diskon
            $harga_setelah_diskon -= $diskon_rupiah;
        }

        // Return JSON output
        return response()->json([
            'total_diskon' => number_format($total_diskon, 2, '.', ''),
            'total_harga_setelah_diskon' => number_format($harga_setelah_diskon, 2, '.', '')
        ], 200);
    }
}
