@extends('admin')

@section('head')
	<title>Admin | Academics</title>
@endsection
@section('body')

	<div class="card">
		<div class="card-header">
			<div class="text-right">
			   <button class="btn btn-primary btn-sm" data-toggle="collapse" data-target="#new"><i class="fa fa-plus"></i> New</button>
			</div>
		</div>
		<div class="collapse1" id="new">
			<div class="card-body">
				<form action="/admin/academic/post" method="post">
					{{ csrf_field()}}
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control">
					</div>

					<div class="form-group">
						<label>Choose a photo</label>
						<input type="file" name="img" class="form-control">
					</div>

					<div class="form-group">
						<label>Content</label>
						<textarea name="descr" rows="10" class="form-control"></textarea>
					</div>
					<button class="btn btn-success" type="submit" id="btnSave"><i class="fa fa-save"></i> Save</button>
					<button class="btn btn-success" type="reset" id="btnSave"><i class="fa fa-refresh fa-spin"></i> Reset</button>
				</form>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header">
		   ACADEMIC
		</div>
		<div class="card-body" style="padding: 0">
			<div class="table-responsive">
				<table class="table table-hovered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Photo</th>
							<th>Description</th>
							<th>Status</th>
							<th>Created</th>
							<th>Updated</th>
						</tr>
					</thead>				
					<tr>
						<td>001</td>
						<td>Muth</td>
						<td>logo</td>
						<td>llljl</td>
						<td>llljl</td>
						<td>llljl</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

@endsection
