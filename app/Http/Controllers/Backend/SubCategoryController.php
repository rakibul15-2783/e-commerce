<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function index(){
        return view("backend.pages.subcategory.add");
    }

    public function insert(Request $rqst){
        $subcat = new SubCategory;
        $subcat->name = $rqst->name;
        $subcat->price = $rqst->price;
        $subcat->status = $rqst->status;
        $subcat->save();
        return response()->json([
            'msg'=> 'Data Successfully Submited'
         ]);
    }

    public function show(){
        $subcats = SubCategory::all();
        return view('backend.pages.subcategory.manage',compact('subcats'));
    }
}
