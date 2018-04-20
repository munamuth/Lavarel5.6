@extends('admin')

@section('head')
	<title>Admin | Academics</title>
@endsection
@section('body')
	<div class="card" id="property">
		<div class="card-header">
			<button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#list"> <span class="fa fa-building"></span> Property</button>
			<button class="btn btn-link btn-sm" data-toggle="collapse" data-target="#new"><span class="fa fa-plus"></span> New</button>
		</div>
		<div class="collapse" id="list" data-parent="#property">
			<div class="card-body no_padding" >
				<div class="padding_5 row d-flex flex-row-reverse">
					<div class="col-12 col-sm-4">
						<div class>
							<form action="/admin/property/search" method="get">
								<div class="input-group">
									<input type="text" name="search" class="form-control form-control-sm" placeholder="Search for...">
									<div class="input-group-append">
										<button type="search" class="btn btn-success btn-sm"><span class="fa fa-search"></span></button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="col-12 col-sm-8">

						<button class="btn btn-link btn-sm" title="Edit Item(s)"><span class="fa fa-edit"></span></button>
						<button class="btn btn-link btn-sm" title="Delete Item(s)"><span class="fa fa-trash"></span></button>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th><input type="checkbox" name="checkAll" id="checkAll"></th>
								<th>Name</th>
								<th>Price</th>
								<th>Owner</th>
								<th>Location</th>
							</tr>
						</thead>
						<tbody>
							@foreach( $property as $p)
								<tr>
									<td><input type="checkbox" name="item[]"></td>
									<td>{{$p->name}}</td>
									<td>{{$p->price}}</td>
									<td>{{$p->user_id}}</td>
									<td>{{$p->location}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="collapse show" id="new" data-parent="#property">
			<div class="card-body">
				<form action="/admin/property" method="post" class="form-horizontal">
					{{csrf_field()}}
					<div class="row">
						<div class="col-12 col-sm-9">
							<div class="form-group row">
								<label class='col-12 col-sm-3 col-form-label-sm'>Name</label>	
								<div class="col-12 col-sm-9">					
									<input type="text" name="name" class="form-control form-control-sm" placeholder="Property Name" required>
								</div>
							</div>
							<div class="form-group row">
								<label class='col-12 col-sm-3 col-form-label-sm'>Type</label>	
								<div class="col-12 col-sm-9">					
									<select name="type" class="form-control form-control-sm" required>
										<option value="0">---</option>
										@foreach($types as $t)
											<option value="{{$t->id}}">{{$t->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class='col-12 col-sm-3 col-form-label-sm'>Price</label>
								<div class="col-12 col-sm-9">
									<input type="text" name="price" class="form-control form-control-sm" placeholder="Price" required>
								</div>
							</div>
							<div class="form-group row">

								<label class='col-12 col-sm-3 col-form-label-sm'>Location</label>
								<div class="col-12 col-sm-9">
									<input type="text" name="location" class="form-control form-control-sm" placeholder="Location" required>
								</div>
							</div>
							<div class="form-group row">
								<label class='col-12 col-sm-3 col-form-label-sm'>Description</label>	
								<div class="col-12 col-sm-9">					
									<textarea name="descr" class="form-control form-control-sm" placeholder="Describe your property" required></textarea>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-3">
							<div class="image_container">
	    						<input type="file" name="file[]" class="form-control-file form-control-sm" multiple required>
	    					</div>
						</div>

						<div class="col-12 col-sm-9">
							<div class="row">
								<label class='col-12 col-sm-3'></label>	
								<div class="col-12 col-sm-9">					
									<button type="submit" class="btn btn-success btn-sm"><span class="fa fa-save"></span> Save</button>
									<button type="reset" class="btn btn-warning btn-sm"><span class="fa fa-repeat"></span> Reset</button>
								</div>
							</div>
						</div>

					</div>

					
				</form>
			</div>
		</div>
	</div>
@endsection