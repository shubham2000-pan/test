<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\Hash;
use App\Models\Product;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result=Product::get();
        return view('Product.Product_list',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Product.add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       if($request->hasfile('image')){
            $destinationPath = public_path( 'images/product' );
            if ( ! File::exists( $destinationPath ) ) {
                File::makeDirectory( $destinationPath, 0777, true, true );
              }
             
                $image = $request['image'];
               
                $extension = $image->getClientOriginalExtension(); 
                $fileName = time().'.'.$extension; 
                $image->move($destinationPath, $fileName);
            }else{
                $fileName = Null;
            }

        $array =[
            'Product_name'=> $request->Product_name,
            'Qty'=> $request->Qty,
            'Price'=> $request->Price,
            'image'=> $fileName,
        ];
        Product::insert($array);
        return redirect('Product_list');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result=Product::where('id','=',$id)->first();
        return view('Product.Product_detailes',compact('result')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result=Product::where('id','=',$id)->first();
        return view('Product.Product_edit',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $id= $request->id;

        if($request->hasfile('image')){
            $destinationPath = public_path( 'images/product' );
            if ( ! File::exists( $destinationPath ) ) {
                File::makeDirectory( $destinationPath, 0777, true, true );
              }
             
                $image = $request['image'];
               
                $extension = $image->getClientOriginalExtension(); 
                $fileName = time().'.'.$extension; 
                $image->move($destinationPath, $fileName);
            }else{
                $fileName = Null;
            }

        $array =[
            'Product_name'=> $request->Product_name,
            'Qty'=> $request->Qty,
            'Price'=> $request->Price,
            'image'=> $fileName,
        ];
        Product::where('id','=',$id)->update($array);
        return redirect('Product_list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Product::where('id','=',$id)->delete();
       return redirect('Product_list');
    }
}
