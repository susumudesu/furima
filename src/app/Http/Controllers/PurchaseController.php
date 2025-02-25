<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\User;


class PurchaseController extends Controller
{
    public function index($itemId)
    {
        $item = Product::find($itemId);

        return view('purchase')->with('item',$item);
    }
}
