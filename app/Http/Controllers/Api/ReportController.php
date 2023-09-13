<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Product;
use DB;

class ReportController extends Controller{
    public function InventoryValuation()
    {
        $products= Product::all();
        $stock_value =0;
        for($i=0; $i<count($products); $i++){
            $stock_value+=$products[$i]["buying_price"];
        }
        $data = [
            'stock_value' => $stock_value,
            'products' => $products, // Assuming $products is an array variable
        ];
        return response()->json($data);
    }
    public function StockStatus()
    {
        return response()->json("StockStatus working");
    }
    public function ReorderReport()
    {
        return response()->json("ReorderReport working");
    }
    public function SalesReport()
    {
        return response()->json("SalesReport working");
    }
    public function PurchaseOrderReport()
    {
        return response()->json("PurchaseOrderReport working");
    }
    public function SalesOrderReport()
    {
        return response()->json("SalesOrderReport working");
    }
}