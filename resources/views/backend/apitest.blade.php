@extends('backend.includes.master')
@section('main-content')
     <button class="btn btn-info m-4 click">Click</button>
     <button class="btn btn-info m-4 clicktoadd">Click to Add Data</button>

	 <div class="p-4">
		<div class="form-group">
			<label for="">Product</label>
			<input type="text" name="product" class="form-control product">
		</div>
		<div class="form-group">
			<label for="">Price</label>
			<input type="text" name="price" class="form-control price">
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<input type="text" name="description" class="form-control description">
		</div>
		<div class="form-group">
			<label for="">Brand</label>
			<input type="text" name="brand" class="form-control brand">
		</div>
		<div class="form-group">
			<label for="">Category</label>
			<input type="text" name="category" class="form-control category">
		</div>
		<button type="submit" class="btn btn-info form-control submit-btn">Submit</button>
</div>
     <div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Description</th>
										<th>Price</th>
										<th>Discount Percentage</th>
										<th>Rating</th>
										<th>Stock</th>
                                        <th>Brand</th>
                                        <th>Category</th>
                                        <th>Thumbnail</th>
                                        <th>Images</th>
									</tr>
								</thead>
                                
								<tbody class="apidata">
									
									
								</tbody>
                               
								<tfoot>
									<tr>
									<th>ID</th>
										<th>Title</th>
										<th>Description</th>
										<th>Price</th>
										<th>Discount Percentage</th>
										<th>Rating</th>
										<th>Stock</th>
                                        <th>Brand</th>
                                        <th>Category</th>
                                        <th>Thumbnail</th>
                                        <th>Images</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

                
@endsection