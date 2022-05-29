@extends('layouts.app')

@section('title', 'Todo list')

@section('content')

	<div class="row justify-content-center">
		<div class="col-lg-6">
		<div class="card mt-5 bg-dark">
			<div class="card-header text-center text-light">
				<h3 class="card-title">Todo List</h3>
			</div>
			<div class="card-body">
				<ul class="list-group">
					@foreach ($todos as $todo)
				    <li class="list-group-item m-2">{{$todo->Name}} <span class="fw-bold float-end"><a href="todos/{{ $todo->id }}"><i class="fa-solid fa-eye"></a></i></span></li>
				    @endforeach
				</ul>
			</div>
		</div>
		</div>
	</div>


@endsection