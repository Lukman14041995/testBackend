<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function getReport()
    {
        $results = DB::table('mastercategory AS mc')
            ->join('masteritem AS mi', function ($join) {
                $join->on('mc.PerusahaanNo', '=', 'mi.PerusahaanNo')
                    ->on('mc.DeviceID', '=', 'mi.DeviceID')
                    ->on('mc.CategoryID', '=', 'mi.CategoryID');
            })
            ->leftJoin('saleitemdetail AS sid', function ($join) {
                $join->on('mi.PerusahaanNo', '=', 'sid.PerusahaanNo')
                    ->on('mi.ItemID', '=', 'sid.ItemID');
            })
            ->leftJoin('sale AS s', 'sid.TransactionID', '=', 's.TransactionID')
            ->where('mc.PerusahaanNo', 639)
            ->where('mc.DeviceID', 1356)
            ->where('s.SaleDate', '2017-05-11')
            ->select(
                'mc.CategoryID',
                'mc.CategoryName',
                'mi.ItemID',
                'mi.ItemName',
                DB::raw('COALESCE(SUM(sid.Qty), 0) AS TotalQty'),
                DB::raw('COALESCE(SUM(sid.SubTotal), 0) AS SubTotal')
            )
            ->groupBy('mc.CategoryID', 'mc.CategoryName', 'mi.ItemID', 'mi.ItemName')
            ->orderBy('mc.CategoryID')
            ->orderBy('mi.ItemID')
            ->get();


        return response()->json($results);
    }
}
