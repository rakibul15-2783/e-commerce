@extends('backend.includes.master')
@section('main-content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">BrandTwo</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Show BrandTwo</li>
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
										<th>BrandTwo Name</th>
										<th>Category ID</th>
										<th>status</th>
										<th>image</th>
								</thead>
                                @foreach($brandtwos as $brandtwo)
								<tbody>
									<tr>
										<td>{{ $brandtwo->name }}</td>
										<td>{{ $brandtwo->cat_id }}</td>
										<td>{{ $brandtwo->status }}</td>
										<td>
                                            <img height="75" width="100" src="{{ asset('backend/assets/brandtwo/'.$brandtwo->image) }}" alt="BrandTwos Image">
                                             
                                        </td>
										
                                        <td>
                                            <a href="{{ route('editbrandtwo',$brandtwo->id) }}" class="btn btn-info">edit</a>
                                            <a href="{{ route('viewbrandtwo',$brandtwo->id) }}" class="btn btn-success">view</a>
                                            <a href="" class="btn btn-danger">delete</a>
                                        </td>
									</tr>
									
								</tbody>
                                @endforeach
                                
								<tfoot>
									<tr>
                                        <th>BrandTwo Name</th>
										<th>Category ID</th>
										<th>status</th>
										<th>image</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				

@endsection