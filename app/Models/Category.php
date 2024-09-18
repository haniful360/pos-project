<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable =['title'];

    public function products(){

        return $this->hasMany(Product::class);
    }

    public static function arrayForSelect() {
        $arr =[];

        $products = Category::all();

        foreach($products as $product){

            $arr[$product->id] = $product->title;
        }

        return $arr;

    }

}
