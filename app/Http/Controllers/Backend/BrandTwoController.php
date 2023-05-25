<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BranTwo;
use App\Models\BranTwoGallery;
use App\Models\Category;
use Image;
use File;


class BrandTwoController extends Controller
{
    public function index(){
        $cats = Category::all();
        return view("backend.pages.brandtwo.add",compact("cats"));
    }
  
    public function store(Request $rqst){
        $rqst->validate([
            'name'=>'required',
            'cat_id'=>'required'
        ]);
        $brantwo = new BranTwo;
        if($rqst->image){ 
            $image = $rqst->file('image');
            $customName = rand().'.'.$image->getClientOriginalExtension();
            $location = public_path('backend/assets/brandtwo/'.$customName);
            Image::make($image)->resize(300,300)->save($location);
            $brantwo->name = $rqst->name;
            $brantwo->cat_id = $rqst->cat_id;
            $brantwo->status = $rqst->status;
            $brantwo->image = $customName;
     
        }
        $brantwo->save();

        $brantwoId = BranTwo::where('name',$rqst->name)->first();
        if($rqst->images){
            $customImages = $rqst->file('images');
            foreach($customImages as $customImage)
            {
                $brandTwoImage = new BranTwoGallery;
                $customeName = rand().'.'.$customImage->getClientOriginalExtension();
                $customlocation = public_path('backend/assets/brandtwo/gallery/'.$customeName);
                Image::make($customImage)->resize(300,300)->save($customlocation);
                $brandTwoImage->brand_id = $brantwoId->id;
                $brandTwoImage->status = $brantwoId->status;
                $brandTwoImage->images = $customeName;
                $brandTwoImage->save();
            }    
        }
        return back();
    }

    public function show(){
        $brandtwos = BranTwo::all();
        return view('backend.pages.brandtwo.manage',compact("brandtwos"));
    }

    public function view($id){
        $brandtwo = BranTwo::find($id);
        $gallery = BranTwoGallery::where('brand_id',$brandtwo->id)->get();
        return view("backend.pages.brandtwo.view",compact("brandtwo","gallery"));
    }

    public function edit($id){
        $brandtwo = BranTwo::find($id);
        $cats = Category::all();
        $gallery = BranTwoGallery::where('brand_id',$brandtwo->id)->get();
        return view("backend.pages.brandtwo.edit",compact("brandtwo","gallery","cats"));
    }

    public function update(Request $rqst,$id){
        $brandtwo = BranTwo::find($id);

        if($rqst->image){
            if(File::exists(public_path('backend/assets/brandtwo/'.$brandtwo->image))){
                 File::delete(public_path('backend/assets/brandtwo/'.$brandtwo->image));
                 $image = $rqst->file('image');
                 $customName = rand().'.'.$image->getClientOriginalExtension();
                 $location = public_path('backend/assets/brandtwo/'.$customName);
                 Image::make($image)->resize(300,300)->save($location);
                 $brandtwo->name = $rqst->name;
                 $brandtwo->status = $rqst->status;
                 $brandtwo->cat_id = $rqst->cat_id;
                 $brandtwo->image = $customName;
                 $brandtwo->update();

            }

        }
        else{
            $brandtwo->name = $rqst->name;
            $brandtwo->status = $rqst->status;
            $brandtwo->cat_id = $rqst->cat_id;
            $brandtwo->update();

        }
        return back();
        
    }

    public function deletegallery($id){
        $brand_gallery = BranTwoGallery::find($id);
        if(File::exists('backend/assets/brandtwo/gallery/'.$brand_gallery->images)){
             File::delete('backend/assets/brandtwo/gallery/'.$brand_gallery->images);
             $brand_gallery->delete();
             
        }
        return back();
    }

    public function updategallery(Request $rqst, $brand_id){
        $brandtwo = BranTwo::find($brand_id);
        if($rqst->images){
            $customImages = $rqst->file('images');
            foreach($customImages as $customImage)
            {
                $brandTwoImage = new BranTwoGallery;
                $customeName = rand().'.'.$customImage->getClientOriginalExtension();
                $customlocation = public_path('backend/assets/brandtwo/gallery/'.$customeName);
                Image::make($customImage)->resize(300,300)->save($customlocation);
                $brandTwoImage->brand_id = $brand_id;
                $brandTwoImage->status = $brandtwo->status;
                $brandTwoImage->images = $customeName;
                $brandTwoImage->save();
            }    
        }
        return back();
    }
}
