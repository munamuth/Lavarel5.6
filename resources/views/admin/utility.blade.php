@extends('admin')

@section('head')
	<title>Admin | Academics</title>
@endsection
@section('body')
	<nav>
	  	<div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#type">Property Type</a>
		    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#status">Status</a>
		    <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#location">Location</a>
	  	</div>
	</nav>
	<div class="tab-content" id="nav-tabContent">
		<!-- property type tab -->
		<div class="tab-pane fade" id="type" role="tabpanel" aria-labelledby="nav-home-tab">
  			<div class="card">
  				<div id="prop_type">
  					<div class="card-header bg-light">
  						<button class="btn btn-success btn-sm" data-toggle="collapse" data-target="#prop_type_list"><i class="fa fa-list"></i> List</button>
  						<button class="btn btn-info btn-sm"  data-toggle="collapse" data-target="#prop_type_add"><i class="fa fa-plus"></i> Add</button>
  					</div>
  					<div class="collapse show" id="prop_type_list" data-parent="#prop_type">
  						<div class="card-body no_padding">
	  						<div class="table-responsvie">
	  							<table class="table">
	  								<thead>
	  									<tr>
	  										<th>ID</th>
	  										<th>Name</th>
	  										<th>Action</th>
	  									</tr>
	  								</thead>
	  								<tbody>
	  									@foreach(App\property_type::get() as $ptype)
	  										<tr>
	  											<td>{{$ptype->id}}</td>
	  											<td>{{$ptype->name}}</td>
	  											<td>{{$ptype->status->name}}</td>
	  											<td>
	  												<button class="btn btn-info btn-sm" onclick="btnEditType_click({{$ptype->id}})"><i class="fa fa-edit"></i> Edit</button>
	  												<button class="btn btn-danger btn-sm" onclick="btnDeleteType_click({{$ptype->id}})"><i class="fa fa-trash"></i> Delete</button>
	  											</td>
	  										</tr>
	  									@endforeach
	  								</tbody>
	  							</table>
	  						</div>
	  					</div>
  					</div>
  					<div class="collapse" id="prop_type_add" data-parent="#prop_type">
  						<div class="card-body">
	  						<form action="/admin/property/type" method="post">
	  							{{csrf_field()}}
	  							<div class="form-group row">
		  							<label class="col-12 col-sm-2 col-label-sm">Name</label>
		  							<div class="col-12 col-sm-6">
		  								<input type="text" name="name" class="form-control form-control-sm">
		  							</div>
		  						</div>
	  							<div class="form-group row">
		  							<label class="col-12 col-sm-2 col-label-sm">Status</label>
		  							<div class="col-12 col-sm-6">
		  								<select class="form-control form-control-sm" name="status">
		  									@foreach(App\status::get() as $s)
		  										<option value="{{$s->id}}">{{$s->name}}</option>
		  									@endforeach
		  								</select>
		  							</div>
		  						</div>
		  						<div class="form-group row">
		  							<div class="col-12 col-sm-2"></div>
		  							<div class="col-12 col-sm-10">
		  								<button class="btn btn-success btn-sm"><i class="fa fa-save"></i> Save</button>
		  							</div>
		  						</div>
	  						</form>
	  					</div>
  					</div>
  					
  				</div>
  				
  			</div>					
  		</div>
  		<!-- end of property type tab -->
  		<!-- PROPERTY STATUS TAB -->
  		<div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="nav-profile-tab">
	  		<div class="card">
  				<div id="prop_status">
  					<div class="card-header bg-light">
  						<button class="btn btn-success btn-sm" data-toggle="collapse" data-target="#prop_status_list"><i class="fa fa-list"></i> List</button>
  						<button class="btn btn-info btn-sm"  data-toggle="collapse" data-target="#prop_status_add"><i class="fa fa-plus"></i> Add</button>
  					</div>
  					<div class="collapse show" id="prop_status_list" data-parent="#prop_status">
  						<div class="card-body no_padding">
	  						<div class="table-responsvie">
	  							<table class="table">
	  								<thead>
	  									<tr>
	  										<th>ID</th>
	  										<th>Name</th>
	  										<th>Action</th>
	  									</tr>
	  								</thead>
	  								<tbody>
	  									@foreach(App\status::get() as $pstatus)
	  										<tr>
	  											<td>{{$pstatus->id}}</td>
	  											<td>{{$pstatus->name}}</td>
	  											<td>
	  												<button class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</button>
	  												<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
	  											</td>
	  										</tr>
	  									@endforeach
	  								</tbody>
	  							</table>
	  						</div>
	  					</div>
  					</div>
  					<div class="collapse" id="prop_status_add" data-parent="#prop_status">
  						<div class="card-body">
	  						status add
	  					</div>
  					</div>  					
  				</div>  				
  			</div>	
  		</div>
  		<!-- END OF PROPERTY STATYS TAB -->
  		<div class="tab-pane fade  show active" id="location" role="tabpanel" aria-labelledby="nav-contact-tab">
  			<div id="user_status">
	  			<div class="card">
	  				<div class="card-header bg-light">
	  					<button class="btn btn-success btn-sm" data-toggle="collapse" data-target="#user_status_list"><i class="fa fa-list"></i> List</button>
	  					<button class="btn btn-success btn-sm" data-toggle="collapse" data-target="#user_status_add"><i class="fa fa-plus"></i> Add</button>
	  				</div>
	  				<div class="collapse show" id="user_status_list" data-parent="#user_status">
		  				<div class="card-body no_padding">
		  					<div class="table-responsive">
		  						<table class="table">
		  							<thead>
		  								<tr>
		  									<td>Name</td>
		  									<td>Parent</td>
		  									<td>Action</td>
		  								</tr>
		  							</thead>
		  							<tbody>
		  								@foreach(App\Province::get() as $l)
		  								<tr>
		  									<td>{{$l->name}}</td>
		  									<td>{{$l->sup['name']}}</td>
		  									<td style="display: flex;">
		  										<button class="btn btn-info btn-sm" onclick="btnEditLocation_click({{$l->id}}"><i class="fa fa-edit"></i> Edit</button>
		  										&nbsp;
		  										<button class="btn btn-info btn-sm" onclick="btnDeleteLocation_click({{$l->id}}"><i class="fa fa-trash"></i> Delete</button>
		  									</td>
		  								</tr>
		  								@endforeach
		  							</tbody>
		  						</table>
		  					</div>
		  				</div>
		  			</div>
	  				<div class="collapse" id="user_status_add" data-parent="#user_status">
		  				<div class="card-body">
		  					<form action="/admin/location" method="post">
		  						{{csrf_field()}}
		  						<div class="form-group row">
		  							<label class="col-12 col-sm-3 col-label-sm">Name</label>
		  							<div class="col-12 col-sm-9 col-label-sm">
		  								<input type="text" name="name" class="form-control form-control-sm" placeholder="Name">
		  							</div>
		  						</div>
		  						<div class="form-group row">
		  							<label class="col-12 col-sm-3 col-label-sm">Parent</label>
		  							<div class="col-12 col-sm-9 col-label-sm">
		  								<select class="form-control form-control-sm" name="parent">
		  									<option value="0">No parent</option>
		  									@foreach(App\province::get() as $l)
												<option value="{{$l->id}}">{{$l->name}}</option>
		  									@endforeach
		  								</select>
		  							</div>
		  						</div>

		  						<div class="form-group row">
		  							<label class="col-12 col-sm-3 col-label-sm"></label>
		  							<div class="col-12 col-sm-9 col-label-sm">
		  								<button class="btn btn-success btn-sm"><i class="fa fa-save"></i> Save</button>
		  							</div>
		  						</div>			
		  					</form>
		  				</div>
		  			</div>
	  			</div>
	  		</div>
  		</div>
	</div>


	<script type="text/javascript">
		function btnEditType_click(id)
		{
			$.ajax({
				url : '/admin/property/type/get/' + id,
				type : 'get',
				success: function(data)
				{
					if(data.STATUS == true)
					{
						
					}
				},
				error: function(data)
				{

				}

			})
		}
	</script>
@endsection