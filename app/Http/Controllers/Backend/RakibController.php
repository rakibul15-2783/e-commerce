<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rakib;

class RakibController extends Controller
{
    public function index(){
        return view('backend.pages.rakib.add');
    }

    public function insert(Request $rqst){
        $rakib = new Rakib;
        $rakib->name = $rqst->name;
        $rakib->des = $rqst->des;
        $rakib->price = $rqst->price;
        $rakib->quantity = $rqst->quantity;
        $rakib->status = $rqst->status;
        $rakib->save();
        return response()->json([
            "msg" => "Data Successfully Added"
        ]);
    }

    public function show(){
        $rakib = Rakib::all();
        return response()->json([
            "alldata" => $rakib
        ]);

    }

    public function active($id){
        $rakib = Rakib::find($id);
        $rakib->status = "2";
        $rakib->update();
        return response()->json([
            "msg" => "Status Changed"
        ]);
    }
    public function inactive($id){
        $rakib = Rakib::find($id);
        $rakib->status = "1";
        $rakib->update();
        return response()->json([
            "msg" => "Status Changed"
        ]);
    }
    public function delete($id){
        $rakib = Rakib::find($id);
        $rakib->delete();
        return response()->json([
            "msg" => "Data Deleted"
        ]);
    }

    public function edit($id){
        $rakib = Rakib::find($id);
        return response()->json([
            "alldata" => $rakib
        ]);
    }

    public function update(Request $rqst, $id){
        $rakib = Rakib::find($id);
        $rakib->name = $rqst->name;
        $rakib->des = $rqst->des;
        $rakib->price = $rqst->price;
        $rakib->quanatity = $rqst->quanatity;
        $rakib->status = $rqst->status;
        $rakib->save();
        return response()->json([
            "msg" => "Data Updatetd"
        ]);
    }
}
 