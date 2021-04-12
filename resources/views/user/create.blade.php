@extends('layouts.app')

@section('title', 'Nuevo usuario')

@section('content')

<h1>Nuevo Usuario</h1>

<form action="{{ action('UserController@store') }}" method="post" >
	{{ csrf_field() }}
	<div class="mb-3">
		<label for="name" class="form-label">Name</label>
		<input type="text" required="" class="form-control" id="name" name="name" aria-describedby="nameHelp">
		<div id="nameHelp" class="form-text">Campo nombre.</div>
	</div>
	<div class="mb-3">
		<label for="lastname" class="form-label">Lastname</label>
		<input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastnameHelp">
		<div id="lastnameHelp" class="form-text">Campo apellido.</div>
	</div>
	<div class="mb-3">
		<label for="email" class="form-label">Email address</label>
		<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
		<div id="emailHelp" class="form-text">Campo email.</div>
	</div>
	<div class="mb-3">
		<label for="password" class="form-label">Password</label>
		<input type="password" class="form-control" id="password" name="password">
	</div>
	<div class="mb-3">
		<label for="foto" class="form-label">Foto</label>
		<input type="file" class="form-control" id="foto" name="foto">
	</div>
		<button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection