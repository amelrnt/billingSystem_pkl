<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ProductController extends BaseController
{
    public function showAll()
    {
        $product = ProductModel::paginate(10);

        return view('product', ['product' => $product]);
    }

    public function showByid($id)
    {
        $product = ProductModel::where('id', '=', $id)
        ->first();

        return view('form_product', ['records' => $product]);
    }

    public function putData(Request $request, $id)
    {
        $prodData = ProductModel::find($id);

        $prodData->name = $request->input('name');
        $prodData->price = $request->input('price');
        $prodData->desc = $request->input('desc');
        $prodData->status = 1;
        $prodData->save();

        return redirect('/productData')
        ->with('status', 'edit');
    }
    
    public function postData(Request $request)
    {
        $prodData = new ProductModel;

        $prodData->name = $request->input('name');
        $prodData->price = $request->input('price');
        $prodData->desc = $request->input('desc');
        $prodData->status = 1;
        $prodData->save();

        return redirect('/productData')
        ->with('status', 'input');
    }
}
