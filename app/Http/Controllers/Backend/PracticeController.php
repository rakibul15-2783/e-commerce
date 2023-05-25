<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Practice;

class PracticeController extends Controller
{
    public function index(){
        return view('backend.pages.practice.add');
    }

    public function insert(Request $rqst){
        $practice = new Practice;
        $practice->name = $rqst->name;
        $practice->des = $rqst->des;
        $practice->price = $rqst->price;
        $practice->quantity = $rqst->quantity;
        $practice->status = $rqst->status;
        $practice->save();
        return response()->json([
            "msg" => "Data Successfully Added"
        ]);
    }

    public function show(){
        $practice = Practice::all();
        return response()->json([
             "alldata" => $practice,
             "status" => "200"
        ]);
    }

    public function active($id){
        $practice = Practice::find($id);
        $practice->status = "2";
        $practice->update();
        return response()->json([
            "msg"=>"Status Changed"
        ]);
    }

    public function inactive($id){
        $practice = Practice::find($id);
        $practice->status = "1";
        $practice->update();
        return response()->json([
            "msg" => "Status Changed"
        ]);
    }

    public function delete($id){
        $practice = Practice::find($id);
        $practice->delete();
        return response()->json([
            "msg" => "Data Deleted"
        ]);
    }

    public function edit($id){
        $practice = Practice::find($id);
        return response()->json([
            "alldata"=> $practice
        ]);
    }

    public function update(Request $rqst, $id){
        $practice = Practice::find($id);
        $practice->name = $rqst->name;
        $practice->des = $rqst->des;
        $practice->price = $rqst->price;
        $practice->quantity = $rqst->quantity;
        $practice->status = $rqst->status;
        $practice->save();
        return response()->json([
            "msg"=>"Data Updated"
        ]);
    }
}
