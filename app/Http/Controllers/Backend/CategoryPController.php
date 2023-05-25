<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryP;

class CategoryPController extends Controller
{
    public function index(){
        return view("backend.pages.categoryp.add");
    }
    public function insert(Request $rqst){
        $cat = new CategoryP;
        $cat->name = $rqst->name;
        $cat->des = $rqst->des;
        $cat->price = $rqst->price;
        $cat->status = $rqst->status;
        $cat->save();
        return back();
    }

    public function show(){
        $cats = CategoryP::all();
        return view('backend.pages.categoryp.manage',compact('cats'));
    }

    public function active($id){
        $cat = CategoryP::find($id);
        $cat->status = "2";
        $cat->update();
        return back();
    }
    public function inactive($id){
        $cat = CategoryP::find($id);
        $cat->status = "1";
        $cat->update();
        return back();
    }
    public function delete($id){
        $cat = CategoryP::find($id);
        $cat->delete();
        return back();
    }
    public function edit($id){
        $cat = CategoryP::find($id);
        return view('backend.pages.categoryp.edit',compact('cat'));
    }

    public function update(Request $rqst, $id){
        $cat =  CategoryP::find($id);
        $cat->name = $rqst->name;
        $cat->des = $rqst->des;
        $cat->price = $rqst->price;
        $cat->status = $rqst->status;
        $cat->save();
        return back();
    }
}
