<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.category.add');
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
        $cat = new Category;
        $cat->name = $request->name;
        $cat->des = $request->des;
        $cat->price = $request->price;
        $cat->quantity = $request->quantity;
        $cat->status = $request->status;
        $cat->save();
        return response()->json([
           'msg'=> 'Data Successfully Submited'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $categories = Category::all();
        return response()->json([
            'alldata' => $categories,
            'status' => "200"
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Category::find($id);
        return response()->json([
            "alldata" => $cat,
            "msg" => "Data Updated"
        ]);
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
        $cat = Category::find($id);
        $cat->name = $request->name;
        $cat->des = $request->des;
        $cat->price = $request->price;
        $cat->quantity = $request->quantity;
        $cat->status = $request->status;
        $cat->save();
        return response()->json([
           'msg'=> 'Data Successfully Updated'
        ]);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return response()->json([
           "msg"=>"Data Successfully Deleted"
        ]);
    }

    public function active($id){
        $cat = Category::find($id);
        $cat->status = "2";
        $cat->update();
        return response()->json([
            "msg"=>"Status Changed"
        ]);
    }
    public function inactive($id){
        $cat = Category::find($id);
        $cat->status = "1";
        $cat->update();
        return response()->json([
            "msg"=>"Status Changed"
        ]);
    }
}
