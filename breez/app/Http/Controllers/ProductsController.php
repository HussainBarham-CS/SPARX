<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use App\Models\Products;
use App\Events\AddProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\storeProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function addShow($id)
    {
        $shop = DB::table('shops')->where('user_id',$id)->first();
        $Data = DB::table('products')->where('shop_id',$id)->first();
        return view('addProduct',compact('shop','Data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeProductRequest $request ,$id )
    {
        $add = Products::create([
            'name' => $request->productName,
            'price' => $request->productPrice,
            'desc' => $request->productDescription,
            'img' => $request->productImage,
            'numbers' => $request->productQuantity,
            'shop_id' => $id,
        ]);

        $shop = DB::table('shops')->where('user_id',$id)->first();
        $Data = DB::table('products')->where('shop_id',$id)->first();


        $products = DB::table('products')->where('shop_id',$id)->get();

        $productNum = count($products);

        $orders = DB::table('orders')->where('shop_id',$id)->get();

        $orderNum = count($orders);


        $pro = DB::table('users')->where('id',$id)->first();

        event(new AddProduct($pro));

        return view('adminDash',compact('shop','Data','productNum','orderNum','orders'));
        //return $user;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $this->shop_id = $id;

        $shop = DB::table('shops')->where('user_id',$id)->first();
        $Data = Shop::find($id)->products;
        return view('adminProducts',compact('shop','Data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products , $id)
    {
        $Data = Products::find($id);
        $Shop = DB::table('products')->where('id',$id)->first();

        $shop = DB::table('shops')->where('id',$Shop->shop_id)->first();
        return view('updateProduct',compact('shop','Data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products , $id)
    {
        $product = Products::findorfail($id);
        $product->name = $request->productName;
        $product->Price = $request->productPrice;
        $product->numbers = $request->productQuantity;
        $product->desc = $request->productDescription;
        $product->img = $request->productImage;
        $product->save();


        $Data = Products::find($id);
        $Shop = DB::table('products')->where('id',$id)->first();

        $shop = DB::table('shops')->where('id',$Shop->shop_id)->first();

        $products = DB::table('products')->where('shop_id',$Shop->shop_id)->get();

        $productNum = count($products);

        $orders = DB::table('orders')->where('shop_id',$Shop->shop_id)->get();

        $orderNum = count($orders);

        return view('adminDash',compact('shop','Data','productNum','orderNum','orders'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products , $id)
    {
        $Data = Products::find($id);
        $Shop = DB::table('products')->where('id',$id)->first();

        $shop = DB::table('shops')->where('id',$Shop->shop_id)->first();

        $products = DB::table('products')->where('shop_id',$id)->get();

        $productNum = count($products);

        $orders = DB::table('orders')->where('shop_id',$id)->get();

        $orderNum = count($orders);

        Products::findorfail($id)->delete();

        return view('adminDash',compact('shop','Data','productNum','orderNum','orders'));
    }
}
