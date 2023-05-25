@extends('backend.includes.master')
@section('main-content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">BrandTwo</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add BrandTwo</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
                <!--end row-->
				<div class="row">
					<div class="col-xl-6">
						
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Add BrandTwo</h5>
									</div>
									<hr/>
                                    <form action="{{ route('updatebrandtwo',$brandtwo->id) }}" method="POST" enctype="multipart/form-data">
                                       @csrf
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Your BrandTwo Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" value="{{ $brandtwo->name }}" class="form-control" id="inputEnterYourName" placeholder="Enter BrandTwo Name">
										    @error('name')
                                               <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
									</div>
									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Select Category</label>
										<div class="col-sm-9">
											<select name="cat_id" id="cat_id" class="form-control">
                                            <option value="{{ $brandtwo->cat_id }}">{{ $brandtwo->id }}</option>
                                            @foreach($cats as $cat)
                                                 <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                            </select>
                                            @error('cat_id')
                                               <span class="text-danger">{{ $message }}</span>
                                            @enderror
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="status" class="col-sm-3 col-form-label">Status</label>
										<div class="col-sm-9">
											<input type="text" name="status" value="{{ $brandtwo->status }}" class="form-control" id="status" placeholder="Status">
										    
                                        </div>
									</div>
                                    <div class="row mb-3">
										<label for="image" class="col-sm-3 col-form-label">Image</label>
										<div class="col-sm-9">
											<img height="75" width="75"  src="{{ asset('backend/assets/brandtwo/'.$brandtwo->image) }}" alt="">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="image" class="col-sm-3 col-form-label">Image</label>
										<div class="col-sm-9">
											<input type="file" name="image" class="form-control" id="image" >
										</div>
									</div>
								
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info px-5">Add</button>
										</div>
									</div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-xl-6">
						
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Edit Images</h5>
									</div>
									<hr/>
                                    <div class="row mb-3">
										<label for="image" class="col-sm-3 col-form-label">Images</label>
										<div class="col-sm-9">
                                            @foreach($gallery as $gallery)
											
                                            <img height="100" width="75" src="{{ asset('backend/assets/brandtwo/gallery/'.$gallery->images) }}" alt="">
                                            <a href="{{ route('deletegallery',$gallery->id) }}" class="btn btn-danger">X</a>
										    @endforeach  
											  
                                        </div>


										<form action="{{ route('updategallery',$brandtwo->id) }}" method="POST" enctype="multipart/form-data">
										  @csrf
										<div class="row mb-3">
										   <label for="images" class="col-sm-3 col-form-label">Images</label>
										    <div class="col-sm-9">
											 <input type="file" name="images[]" class="form-control" id="images" multiple>
										    </div>
									    </div>
										<div class="row">
										    <label class="col-sm-3 col-form-label"></label>
										    <div class="col-sm-9">
											   <button type="submit" class="btn btn-info px-5">Add Gallery</button>
										    </div>
									    </div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->

@endsection