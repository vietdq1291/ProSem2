<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SessionHandler;
use App\Cart;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            
            $images= \Illuminate\Support\Facades\DB::table('images')
                ->join('products','products.id','=','images.im_product_id')
                ->select('products.pr_price','products.pr_name','products.pr_description','images.im_images','products.id')
                ->get();
            return view('layouts.templates.pages.funitures',compact('images'));
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
    public function AddCart(Request $request ,$id)
    {
        //
        $products = \Illuminate\Support\Facades\DB::table('products')->where('id',$id)->first();
        if($products != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($products, $id);
            
            $request->session()->put('Cart',$newCart);
           
        }
        $images= \Illuminate\Support\Facades\DB::table('images')
        ->join('products','products.id','=','images.im_product_id')
        ->select('products.pr_price','products.pr_name','products.pr_description','images.im_images','products.id')
        ->get();
        $products = $images;
        return view('carts',compact('newCart','images'));
        
    
    }
    public function DeleteItem(Request $request ,$id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleItem($id);
        if(Count($newCart->products) > 0){
            
            $request->session()->put('Cart',$newCart);
        } else{
            $request->session()->forget('Cart');
            
        }
        return view('carts',compact('newCart'));
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
