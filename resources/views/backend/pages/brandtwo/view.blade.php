@extends('backend.includes.master')
@section('main-content')
<div class="row">
    <div class="col-md-6"> 
         <h4>BrandTwo Info</h4>
         <label for="">{{ $brandtwo->name }}</label>
         <label for="">{{ $brandtwo->cat_id }}</label>
         <img src="{{ asset('backend/assets/brandtwo/'.$brandtwo->image) }}" alt="">
    </div>
    <div class="col-md-6"> 
         <h4>Gallery</h4>
         @foreach($gallery as $gallery)
         <img src="{{ asset('backend/assets/brandtwo/gallery/'.$gallery->images) }}" alt="">
         @endforeach
    </div>
</div>

@endsection