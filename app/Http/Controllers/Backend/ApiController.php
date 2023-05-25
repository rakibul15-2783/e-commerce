<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apitest;
use App\Models\Category;

class ApiController extends Controller
{
    function index(){
        return view('backend.apitest');
    }

    function insert(Request $rqst){
        $api = new Apitest;

        $api->product = $rqst->product;
        $api->price = $rqst->price;
        $api->des = $rqst->description;
        $api->brand = $rqst->brand;
        $api->category = $rqst->category;
        $api->save();
        return response()->json([
           "msg" => "Data Successfully Save"
        ]);
    }

    function myapi(Request $rqst){

        if($rqst->token == "rakib"){

            if($rqst->action == "find"){
                $cat = Category::find($rqst->id);
                return response()->json([
                    "data" => $cat
                ]);
            }
            else if($rqst->action == "delete"){
                $cat = Category::find($rqst->id);
                $cat->delete();
                if($cat){
                    return response()->json([
                        "msg" => "Data Deleted"
                    ]);

                }
                else{
                    return response()->json([
                        "msg" => "Something went wrong"
                    ]);
                }
                
            }
            
        }
           
    }
}
