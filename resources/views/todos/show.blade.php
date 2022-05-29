@extends('layouts.app')
@section('title', 'Todo Show')
@section('content')

<div class="row justify-content-center">
		<div class="col-lg-6">
		<div class="card mt-5 bg-primary">
			<div class="card-header text-center text-light">
				<h3 class="card-title">{{ $todo->Name}}</h3>
			</div>
			<div class="card-body text-light">
				<p> {{$todo->Discription}} </p>

				<a href="/todos/{{ $todo->id }}/edit" class="btn btn-warning"> Edit</a>
				<a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger"> Delete</a>
			</div>
		</div>
		</div>
	</div>



@endsection