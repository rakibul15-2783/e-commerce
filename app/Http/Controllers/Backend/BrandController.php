<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index(){
        return view('backend.pages.brand.add');
    }

    public function insert(Request $rqst){

        $brand = new Brand;
        $brand->name = $rqst->bname;
        $brand->des = $rqst->bdes;
        $brand->price = $rqst->price;
        $brand->quantity = $rqst->quantity;
        $brand->status = $rqst->status;
        $brand->save();
        return back();

    }

    public function show(){
        $brands = Brand::all();
        return view("backend.pages.brand.manage",compact('brands'));
    }

    public function delete($id){
        $brand = Brand::find($id);
        $brand->delete();
        return back();
    }

    public function active($id){
        $brand = Brand::find($id);
        $brand->status = "2";
        $brand->update();
        return back();
    }

    public function inactive($id){
        $brand = Brand::find($id);
        $brand->status = "1";
        $brand->update();
        return back();
    }

    public function edit($id){
        $brand = Brand::find($id);
        return view('backend.pages.brand.edit',compact('brand'));
    }

    public function update(Request $rqst, $id){
        $brand = Brand::find($id);
        $brand->name = $rqst->bname;
        $brand->des = $rqst->bdes;
        $brand->price = $rqst->price;
        $brand->quantity = $rqst->quantity;
        $brand->status = $rqst->status;
        $brand->update();
        return redirect()->route("showbrand");
    }
}
