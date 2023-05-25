@extends('backend.includes.master')
@section('main-content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">SubCategory</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add SubCategory</li>
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
										<h5 class="mb-0 text-info">Add SubCategory</h5>
									</div>
									<hr/>
                                    
                                        
									<div class="row mb-3">
										<label for="inputEnterYourName" class=" col-sm-3 col-form-label">Enter Your SubCategory Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="subcategory-name form-control" id="subcategory-name" placeholder="Enter SubCategory Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Price</label>
										<div class="col-sm-9">
											<input type="text" name="price" class="subcategory-price form-control" id="subcategory-price" placeholder="Price">
										</div>
									</div>
									
									<div class="row mb-3">
										<label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Status</label>
										<div class="col-sm-9">
											<select name="status" class="subcategory-status form-control" id="subcategory-status">
                                                <option value="">-----Select Status-----</option>
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
										</div>
									</div>
									
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="subcategory-add btn btn-info px-5">Add</button>
										</div>
									</div>
                                    
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->

@endsection