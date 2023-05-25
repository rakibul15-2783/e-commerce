@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Category</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Show Category</li>
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
										<th>Category Name</th>
										<th>Description</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Status</th>
                                        <th>Action</th>
									</tr>
								</thead>
                                
								<tbody class="alldata">
									
									
								</tbody>
                               
								<tfoot>
									<tr>
                                        <th>Category Name</th>
										<th>Description</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Status</th>
                                        <th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				

@endsection