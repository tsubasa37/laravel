<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\Product;

class FavoriteController extends Controller
{

    public function toggleFavorite(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // ユーザーがお気に入りに追加済みかどうかを判定
        $isFavorited = $product->isFavoritedBy($request->user());

        if ($isFavorited) {
            // お気に入りから削除
            $product->favorites()->detach($request->user()->id);
        } else {
            // お気に入りに追加
            $product->favorites()->attach($request->user()->id);
        }

        return response()->json(['favorited' => !$isFavorited]);
    }


}
