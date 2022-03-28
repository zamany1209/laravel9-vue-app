<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if(isset($request->_token))
        {
        return  ProductResource::collection(Product::where('featured' ,'1')->get());
        }
    }
    public function category(Request $request)
    {
        //
        if(isset($request->_token))
        {
            if($request->category == "All")
            {
                return ProductResource::collection(Product::where('featured' ,'1')->get());  
            }
            else{
                if($request->new == "1")
                {
                    return ProductResource::collection(Product::where('featured' ,'1')->where('category' , $request->category)->where('new','1')->get());
                }
                // elseif($request->new)
                // {

                // }
                return ProductResource::collection(Product::where('featured' ,'1')->where('category' , $request->category)->get()); 
            }
        }
        else{
            return "not";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
