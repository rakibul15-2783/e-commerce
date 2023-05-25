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
										<th>CategoryP Name</th>
										<th>Description</th>
										<th>Price</th>
										<th>Status</th>
                                        <th>Action</th>
									</tr>
								</thead>
                                @foreach($cats as $cat)
								
								<tbody>
									    
										<tr>
											<td>{{ $cat->name }}</td>
											<td>{{ $cat->des }}</td>
											<td>{{ $cat->price }}</td>
											<td>
											@if ($cat->status=="1")
											<a href="{{ route('activecategoryp',$cat->id) }}" class="btn btn-sm btn-info">Active</a>
											@else
											<a href="{{ route('inactivecategoryp',$cat->id) }}" class="btn btn-sm btn-success">Inactive</a>
											@endif
											</td>
											<td>
												<a href="{{ route('editcategoryp',$cat->id) }}" class="btn btn-sm btn-info">Edit</a>
												<a href="{{ route('deletecategoryp',$cat->id) }}" class="btn btn-sm btn-danger">Delete</a>
											</td>
										</tr>

										
									
								</tbody>
								@endforeach
                               
								<tfoot>
									<tr>
                                        <th>CategoryP Name</th>
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