<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('backend.pages.product.add');
    }
    public function insert(Request $rqst){
        $product = new Product;
        $product->name = $rqst->pname;
        $product->des = $rqst->pdes;
        $product->price = $rqst->price;
        $product->quantity = $rqst->quantity;
        $product->status = $rqst->status;
        $product->save();
        return back();
    }
    public function show(){
        $products = Product::all();
        return view('backend.pages.product.manage',compact('products'));
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return back(); 
    }

    public function active($id){
        $product = Product::find($id);
        $product->status = "2";
        $product->update();
        return back();

    }
    public function inactive($id){
        $product = Product::find($id);
        $product->status = "1";
        $product->update();
        return back();
        
    }

    public function edit($id){
        $product = Product::find($id);
        return view('backend.pages.product.edit',compact('product'));
    }

    public function update(Request $rqst, $id){
        $product = Product::find($id);
        $product->name = $rqst->pname;
        $product->des = $rqst->pdes;
        $product->price = $rqst->price;
        $product->quantity = $rqst->quantity;
        $product->status = $rqst->status;
        $product->update();
        return redirect()->route('showproduct');
    }
}
