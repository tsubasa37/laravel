<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\Product;

class FavoriteController extends Controller
{
    public function like($id)
    {
        Favorite::create([
        'product_id' => $id,
        'user_id' => Auth::id(),
      ]);

      session()->flash('success', 'You Liked the Reply.');

      return redirect()->back();
    }

    /**
     * 引数のIDに紐づくリプライにUNLIKEする
     *
     * @param $id リプライID
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unlike($id)
    {
      $favorites = Favorite::where('product_id', $id)->where('user_id', Auth::id())->first();
      $favorites->delete();

      session()->flash('success', 'You Unliked the Reply.');

      return redirect()->back();
    }


}
