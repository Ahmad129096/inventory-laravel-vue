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
        $inventory_asset=[];
        $stock_value =0;
        $inventory_asset_value =0;
        for($i=0; $i<count($products); $i++){
            $d = [
                'image' => $products[$i]["image"],
                'product_id' => $products[$i]["id"],
                'product_name' => $products[$i]["product_name"],
                'product_code' =>  $products[$i]["product_code"],
                'buying_price' => $stock_value+=$products[$i]["buying_price"],
                'inventory_asset_value' => $inventory_asset_value+= $products[$i]["buying_price"]*$products[$i]["product_quantity"]
            
            ];
            array_push($inventory_asset, $d) ;

        }
        $data = [
            'products' => $products, // Assuming $products is an array variable
            'inventory_asset' => $inventory_asset
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