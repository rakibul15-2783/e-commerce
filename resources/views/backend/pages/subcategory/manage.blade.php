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
										<th>SubcategoryCategory Name</th>
										<th>Price</th>
										<th>Status</th>
                                        <th>Action</th>
									</tr>
								</thead>
                                @foreach($subcats as $subcat)
								<tbody>
									<tr>
										<td>{{ $subcat->name }}</td>
										<td>{{ $subcat->price }}</td>
										<td>
                                            @if($subcat->status==1)
                                              <a href="" class="btn btn-info">Active</a>
                                            @else
                                              <a href="" class="btn btn-success">Inactive</a>

                                            @endif
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-info">edit</a>
                                            <a href="" class="btn btn-danger">delete</a>
                                        </td>
									</tr>
									
								</tbody>
                                @endforeach
								<tfoot>
									<tr>
                                        <th>SubCategory Name</th>
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