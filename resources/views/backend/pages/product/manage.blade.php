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
                                @foreach($products as $product)
								<tbody>
									<tr>
										<td>{{ $product->name }}</td>
										<td>{{ $product->des }}</td>
										<td>{{ $product->price }}</td>
										<td>{{ $product->quantity }}</td>
										<td>
										@if($product->status==1) <a href="{{ route('activeproduct',$product->id) }}" class="btn btn-success" >Active</a> @endif 
										@if($product->status==2) <a href="{{ route('inactiveproduct',$product->id) }}" class="btn btn-info"   >Inctive</a> @endif
										</td>
                                        <td>
                                            <a href="{{ route('editproduct',$product->id) }}" class="btn btn-info">edit</a>
                                            <a href="{{ route('deleteproduct',$product->id) }}" class="btn btn-danger">delete</a>
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