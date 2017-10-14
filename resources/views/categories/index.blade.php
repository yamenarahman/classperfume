@extends('layouts.app') @section('content')
<div class="container">
	@if(session('message'))
	<div class="row">
		<div class="alert alert-info alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<strong>{{ session('message') }}</strong>
		</div>
	</div>
	@endif
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2 class="pull-left">
				<i class="fa fa-tasks"></i> Categories</h2>
			<a href="{{ url('/categories/create') }}" class="btn btn-primary pull-right">
				<i class="fa fa-plus-circle"></i> Add new category
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Info</th>
						<th>Subcategories</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $category->name }}</td>
						<td>{{ $category->info }}</td>
						<td>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection @push('js')
<script>
	$(".alert").alert();
</script>
@endpush