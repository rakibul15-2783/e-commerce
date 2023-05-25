@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Product</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Show Product</li>
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
										<th>Brand Name</th>
										<th>Description</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Status</th>
                                        <th>Action</th>
									</tr>
								</thead>
                                @foreach($brands as $brand)
								<tbody>
									<tr>
										<td>{{ $brand->name }}</td>
										<td>{{ $brand->des }}</td>
										<td>{{ $brand->price }}</td>
										<td>{{ $brand->quantity }}</td>
										<td>
                                            @if($brand->status==1)
                                              <a href="{{ route('active',$brand->id) }}" class="btn btn-info">Active</a>
                                            @else
                                              <a href="{{ route('inactive',$brand->id) }}" class="btn btn-success">Inactive</a>

                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('editbrand',$brand->id) }}" class="btn btn-info">edit</a>
                                            <a href="{{ route('deletebrand',$brand->id) }}" class="btn btn-danger">delete</a>
                                        </td>
									</tr>
									
								</tbody>
                                @endforeach
								<tfoot>
									<tr>
                                        <th>Brand Name</th>
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