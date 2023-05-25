@extends('backend.includes.master')
@section('main-content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Brand</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Brand</li>
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
					<div class="col-xl-9 mx-auto">
						
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Edit Brand</h5>
									</div>
									<hr/>
                                    <form action="{{ route('updatebrand',$brand->id) }}" method="POST">
                                        @csrf
									<div class="row mb-3">
										<label for="inputEnterYourBrand" class="col-sm-3 col-form-label">Enter Your Brand Name</label>
										<div class="col-sm-9">
											<input type="text" name="bname" value="{{ $brand->name }}" class="form-control" id="inputEnterYourBrand" placeholder="Enter Brand Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Brand Description</label>
										<div class="col-sm-9">
											<input type="text" name="bdes" value="{{ $brand->des }}" class="form-control" id="inputPhoneNo2" placeholder="Brand Description">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Price</label>
										<div class="col-sm-9">
											<input type="text" name="price" value="{{ $brand->price }}" class="form-control" id="inputEmailAddress2" placeholder="Price">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Quantity</label>
										<div class="col-sm-9">
											<input type="text" name="quantity" value="{{ $brand->quantity }}" class="form-control" id="inputChoosePassword2" placeholder="Quantity">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Status</label>
										<div class="col-sm-9">
											<select name="status" class="form-control" id="inputConfirmPassword2">
                                                <option value="">-----Select Status-----</option>
                                                <option value="1" @if ($brand->status==1) selected @endif >Active</option>
                                                <option value="2" @if ($brand->status==2) selected @endif >Inactive</option>
                                            </select>
										</div>
									</div>
									
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info px-5">Update</button>
										</div>
									</div>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->

@endsection