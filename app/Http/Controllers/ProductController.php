<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Requests\productRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=product::all();
        return view('admin.product_list',compact('data'));//,compact(products)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $cat=category::all();

        return view('admin.add_product',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

//        public function store(product $product)
        public function store(Request $request)
//        public function store(productRequest $productRequest)
    {
        $file_extension=$request -> img -> getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path='images/products';
        $request ->img -> move($path,$file_name);
        product::create([
            'product_name'=>$request->product_name,
            'img'=>$file_name,
            'price'=>$request->price,
            'desc'=>$request->desc,
            'cat_id'=>$request->cat_id

        ]);
       return redirect('products');

    }

//    public function store(Request $request)
//    {
//        //
//        $file_extension=$request -> img -> getClientOriginalExtension();
//        $file_name=time().'.'.$file_extension;
//        $path='images/users';
//        $request ->img -> move($path,$file_name);
//       product::create( $request->all()
//        ); echo 'success';
//    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
