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
		<div class="collapse show" id="list" data-parent="#property">
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
									<td>{{$p->owner->name}}</td>
									<td>{{$p->location}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="collapse" id="new" data-parent="#property">
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
									<div class="row">
										<div class="form-group col-12 col-sm-4">
											<label class="col-form-label-sm">City</label>
											<select name="city" class="form-control form-control-sm">
												<option value="0">--Select--</option>
											@foreach(App\Province::where('parent', 0)->orderBy('name')->get() as $city)
												<option value="{{$city->id}}">{{$city->name}}</option>
											@endforeach
											</select>
										</div>
										<div class="form-group col-12 col-sm-4">
											<label class="col-form-label-sm">District</label>
											<select name="district" class="form-control form-control-sm">
												<option value="0">--Select--</option>
											</select>
										</div>
										<div class="form-group col-12 col-sm-4">
											<label class="col-form-label-sm">Commnuce</label>
											<select name="communce" class="form-control form-control-sm">
											<option value="0">--Select--</option>
												
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class='col-12 col-sm-3 col-form-label-sm'></label>
								<div class="form-group col-12 col-sm-9">
									<input type="text" name="addr" class="form-control form-control-sm" placeholder="Address">		
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


	<script type="text/javascript">
		/* city change event */
		$(document).on('change', 'select[name="city"]', function() {
			$value = $(this).val();
			$.ajax({
				url : '/admin/location/getsubbyparent/' + $(this).val(),
				type : 'get',
				success: function (argument) {
					if( argument.STATUS == true )
					{
						string = getsubbyparent(argument.DATA);
						console.log(string)
						$('select[name="district"]').html( string );
					}
					else 
					{
						console.log('sad')
					}
				},
				error : function (argument) {
					console.log( argument)
				}
			})
		});
		/* district change event*/
		$(document).on('change', 'select[name="district"]', function() {
			$value = $(this).val();
			$.ajax({
				url : '/admin/location/getsubbyparent/' + $(this).val(),
				type : 'get',
				success: function (argument) {
					if( argument.STATUS == true )
					{
						string = getsubbyparent(argument.DATA);
						console.log(string)
						$('select[name="communce"]').html( string );
					}
					else 
					{
						console.log('sad')
					}
				},
				error : function (argument) {
					console.log( argument)
				}
			})
		});
		/* data for select each location */
		function getsubbyparent(data) {
			string = '<option value="0"> --Select-- </option>';
			for(i = 0; i < data.length; i++)
			{
				string += '<option value="'+data[i].name+'">'+data[i].name+'</option>';
			}
			return string;
		}
	</script>
@endsection