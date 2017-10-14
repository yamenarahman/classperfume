@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>
				<i class="fa fa-plus-circle"></i> Add new category
			</h2>
		</div>
	</div>
	<div class="row">
		<form action="{{ url('/categories') }}" method="POST" class="form-horizontal" role="form">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name" class="control-label col-md-2">Name</label>
				<div class="col-md-3">
					<input type="text" name="name" id="name" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9 col-md-offset-2">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection