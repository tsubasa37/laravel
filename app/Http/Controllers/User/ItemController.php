<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;

class ItemController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:users');

        $this->middleware(function($request, $next){
            $id = $request->route()->parameter('item'); //shopのid取得
            if(!is_null($id)){ // null判定
                $itemId = Product::AvailableItems()->where('products.id',$id)->exists();
                if(!$itemId){ // 同じでなかったら
                    abort(404); // 404画面表示
                }
            }
            return $next($request);
        });
    }


    public function index()
    {
        $products = Product::AvailableItems()->get();

        return view('user.index', compact('products'));
    }


    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        $quantity = Stock::where('product_id', $product->id)
        ->sum('quantity');

        if($quantity > 9)
        {
            $quantity = 9;
        }

        return view('user.show', compact('product','quantity'));
    }



}
