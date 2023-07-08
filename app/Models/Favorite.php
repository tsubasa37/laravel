<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','user_id'];

    public function user()
    {   //usersテーブルとのリレーションを定義するuserメソッド
        return $this->belongsTo(User::class);
    }

    public function product()
    {   //reviewsテーブルとのリレーションを定義するreviewメソッド
        return $this->belongsTo(Product::class);
    }

}
