@extends('layouts.app')
@section('title','Create Todo')
@section('content')
<div class="row justify-content-center">
	<div class="col-lg-6">
		<div class="card mt-5 bg-warning">
			<div class="card-header text-center text-light">
				<h3 class="card-title">Todo List</h3>
			</div>
			<div class="card-body">
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<form action="store" method="POST">
					@csrf
					<label for="">Name</label>
					<input type="text" name="name" class="form-control">
					<label for="">Discription</label>
					<textarea name="Discription" id="" cols="20" rows="5" class="form-control"></textarea>
					<div class="d-grid mt-3">
						<input type="submit" name="submit" class="btn btn-primary" value="Create Todo">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection