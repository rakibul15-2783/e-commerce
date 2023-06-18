<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.office.add');
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
        $office = new Office;
        $office->name = $request->name;
        $office->des = $request->des;
        $office->price = $request->price;
        $office->qnt = $request->qnt;
        $office->status = $request->status;
        $office->save();
        return redirect()->route("showoffice");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $office = Office::all();
        return view("backend.pages.office.manage",compact("office"));
    }

    public function active($id){
        $office = Office::find($id);
        $office->status = "2";
        $office->save();
        return back();
    }
    public function inactive($id){
        $office = Office::find($id);
        $office->status = "1";
        $office->save();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $office = Office::find($id);
        return view("backend.pages.office.edit",compact("office"));
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
        $office = Office::find($id);
        $office->name = $request->name;
        $office->des = $request->des;
        $office->price = $request->price;
        $office->qnt = $request->qnt;
        $office->status = $request->status;
        $office->update();
        return redirect()->route("showoffice");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $office = Office::find($id);
        $office->delete();
        return back();
    }
}
