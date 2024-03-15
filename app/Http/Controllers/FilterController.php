<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FilterController extends Controller
{

    public function filters(Request $request)
    {
//        dd($request->input('metal'));
        // Получение данных из формы
        $metal = $request->input('metal');
        $color = $request->input('color');
        $stone = $request->input('stone');
        $price = $request->input('price');

        // Применение фильтра к данным о колецах
        $products = Product::where('new', 1)
            ->get();
        // Возвращение отфильтрованных данных
        return $products;
    }
}
