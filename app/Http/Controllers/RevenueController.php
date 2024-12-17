<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevenueController extends Controller
{
    public function hitungShareOjol(Request $request)
    {
        // Validasi input
        $request->validate([
            'harga_sebelum_markup' => 'required|numeric|min:0',
            'markup_persen' => 'required|numeric|min:0|max:100',
            'share_persen' => 'required|numeric|min:0|max:100',
        ]);

        // Ambil input
        $harga_sebelum_markup = $request->input('harga_sebelum_markup');
        $markup_persen = $request->input('markup_persen');
        $share_persen = $request->input('share_persen');

        // Hitung harga setelah markup
        $harga_setelah_markup = $harga_sebelum_markup + ($harga_sebelum_markup * $markup_persen / 100);

        // Hitung share untuk ojek online
        $share_untuk_ojol = $harga_setelah_markup * ($share_persen / 100);

        // Hitung net untuk resto
        $net_untuk_resto = $harga_setelah_markup - $share_untuk_ojol;

        // Return JSON response
        return response()->json([
            'net_untuk_resto' => number_format($net_untuk_resto, 2, '.', ''),
            'share_untuk_ojol' => number_format($share_untuk_ojol, 2, '.', ''),
        ]);
    }
}
