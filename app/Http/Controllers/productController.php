<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{




    public function products()
    {
        $products=Product::latest()->paginate(5);

        return view('products',compact('products'));

    }


    public function add_product(Request $request)
    {
        $request->validate(
            [

            'name'=>'required|unique:Products',
            'price'=>'required',
            ],
            [
            'name.required'=>'name is required',
            'name.unique'=>'product already exists',
            'price.required'=>'price is required',


            ]

        );

        $product=new Product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->save();
        return response()->json([
            'status'=>'success',
        ]);



    }


    public function update_product(Request $request)
    {
        $request->validate(
            [

            'up_name'=>'required',
            'up_price'=>'required',
            ],
            [
            'up_name.required'=>'name is required',
            'up_price.required'=>'price is required',


            ]

        );

        Product::where('id',$request->up_id)->update([
            'name'=>$request->up_name,
            'price'=>$request->up_price,


        ]);
        return response()->json([
            'status'=>'success',
        ]);



    }


    public function delete_product(Request $request)
    {
        product::find($request->product_id)->delete();
        return response()->json([
            'status'=>'success',
        ]);



    }
}
