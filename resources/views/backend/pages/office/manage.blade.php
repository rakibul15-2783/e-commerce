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
										<th>Product Name</th>
										<th>Description</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Status</th>
                                        <th>Action</th>
									</tr>
								</thead>
                                @foreach($office as $office)
								<tbody>
                                    
									<tr>
                                        <td>{{ $office->name }}</td>
                                        <td>{{ $office->des }}</td>
                                        <td>{{ $office->price }}</td>
                                        <td>{{ $office->qnt }}</td>
                                        <td>
                                         @if($office->status == "1")
                                         <a href="{{ route('activeoffice',$office->id) }}" value="{{ $office->id }}" class="btn btn-info btn-sm">Active</a>
                                         @else
                                         <a href="{{ route('inactiveoffice',$office->id) }}" value="{{ $office->id }}" class="btn btn-warning btn-sm">Inactive</a>
                                         @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('editoffice',$office->id) }}" value="{{ $office->id }}" class="btn btn-info btn-sm">Edit</a>
                                            <a href="{{ route('deleteoffice',$office->id) }}" value="{{ $office->id }}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>



                                    
									
								</tbody>
                                @endforeach
								<tfoot>
									<tr>
                                        <th>Product Name</th>
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