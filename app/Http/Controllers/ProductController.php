<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\Category;

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
            if(!empty($request->search))
            {
                $query_product = Product::where('featured' ,'1')->where('name', 'like', '%' . $request->search . '%');
                if(!empty($request->category))
                {
                    $query_product->where('category' , $request->category);
                }
                if($request->new == true)
                {
                    $query_product->where('new' ,'1');
                }

                if(!empty($request->sort_price))
                {
                    if($request->sort_price == 'low_high')
                    {
                        $query_product->orderBy('price');
                    }
                    elseif($request->sort_price == 'high_low')
                    {
                        $query_product->orderBy('price', 'desc');
                    }
                }
                return ProductResource::collection($query_product->get());
            }


            else
            {
                if(empty($request->category))
                {
                $query_product = Product::where('featured' ,'1');
                }
                elseif(!empty($request->category))
                {
                    $query_product = Product::where('featured' ,'1')->where('category' , $request->category);
                }
                if($request->new == true)
                {
                    $query_product->where('new' ,'1');
                }
                if(!empty($request->sort_price))
                {
                    if($request->sort_price == 'low_high')
                    {
                        $query_product->orderBy('price');
                    }
                    elseif($request->sort_price == 'high_low')
                    {
                        $query_product->orderBy('price', 'desc');
                    }
                }
                return ProductResource::collection($query_product->get());
            }

            // if($request->category == "All")
            // {
            //     return ProductResource::collection(Product::where('featured' ,'1')->get());  
            // }
            // else{
            //     if($request->new == "1")
            //     {
            //         return ProductResource::collection(Product::where('featured' ,'1')->where('category' , $request->category)->where('new','1')->get());
            //     }
            //     // elseif($request->new)
            //     // {

            //     // }
            //     return ProductResource::collection(Product::where('featured' ,'1')->where('category' , $request->category)->get()); 
            // }
        }
        else{
            return "not";
        }
    }
    public function list_product_category(Request $request)
    {
        //
        if(isset($request->_token))
        {
            return  ProductResource::collection(Product::where('featured' ,'1')->where('category' , $request->category)->get());
        }
    }
    public function list_categor()
    {
        //
        return Category::All();
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
