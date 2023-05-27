@extends('backend.includes.master')
@section('main-content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">CategoryA</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add CategoryA</li>
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
										<h5 class="mb-0 text-info">Add CategoryA</h5>
									</div>
									<hr/>
                                    
                                        
									<div class="row mb-3">
										<label for="inputEnterYourName" class=" col-sm-3 col-form-label">Enter Your CategoryA Name</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="categorya-name form-control" id="category-name" placeholder="Enter CategoryA Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputPhoneNo2" class="col-sm-3 col-form-label">CategoryA Description</label>
										<div class="col-sm-9">
											<input type="text" name="des" class="categorya-des form-control" id="category-des" placeholder="CategoryA Description">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Price</label>
										<div class="col-sm-9">
											<input type="text" name="price" class="categorya-price form-control" id="category-price" placeholder="Price">
										</div>
									</div>
									
									<div class="row mb-3">
										<label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Status</label>
										<div class="col-sm-9">
											<select name="status" class="categorya-status form-control" id="category-status">
                                                <option value="">-----Select Status-----</option>
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
										</div>
									</div>
									
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="categorya-btn-add btn btn-info px-5">Add</button>
											<button type="submit" style="display:none" class="categorya-btn-update btn btn-info px-5">Update</button>
										</div>
									</div>
                                    
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">CategoryA</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Show CategoryA</li>
							</ol>
						</nav>
					</div>
					
				</div>
                <div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>CategoryA Name</th>
										<th>Description</th>
										<th>Price</th>
										<th>Status</th>
                                        <th>Action</th>
									</tr>
								</thead>
                                
								<tbody class="categorya-alldata">
									
									
								</tbody>
                               
								<tfoot>
									<tr>
                                        <th>CategoryA Name</th>
										<th>Description</th>
										<th>Price</th>
										<th>Status</th>
                                        <th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

@endsection