<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryA;

class CategoryAController extends Controller
{
    function index(){
        return view('backend.pages.categorya.add');
    }
    function insert(Request $rqst){
        $cata = new CategoryA;
        $cata->name = $rqst->name;
        $cata->des = $rqst->des;
        $cata->price = $rqst->price;
        $cata->status = $rqst->status;
        $cata->save();
        return response()->json([
            "msg" => "Data Successfully Added"
        ]);
    }

    function show(){
        $catas = CategoryA::all();
        return response()->json([
            "alldata" => $catas
        ]);

        
    }
    function active($id){
        $cata = CategoryA::find($id);
        $cata->status = "2";
        $cata->update();
        return response()->json([
            "msg"=>"Status Changed"
        ]);
    }
    function inactive($id){
        $cata = CategoryA::find($id);
        $cata->status = "1";
        $cata->update();
        return response()->json([
            "msg"=>"Status Changed"
        ]);
    }

    function delete($id){
        $cata = CategoryA::find($id);
        $cata->delete();
        return response()->json([
            "msg"=>"Data Deleted"
        ]);
    }

    function edit($id){
        $cata = CategoryA::find($id);
        return response()->json([
            "data"=>$cata
        ]);
    }
    function update(Request $rqst, $id){
        $cata = CategoryA::find($id);
        $cata->name = $rqst->name;
        $cata->des = $rqst->des;
        $cata->price = $rqst->price;
        $cata->status = $rqst->status;
        $cata->save();
        return response()->json([
            "msg" => "Data Successfully Updated"
        ]);
    }
}
