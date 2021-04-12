@extends('layouts.app')

@section('title', 'Listado de Usuarios!!!')

@section('content')


<h1>Editar usuario </h1>
<form action="/users/edit/{{ $user->id }}" method="post">
	{{ csrf_field() }}
	<div class="row g-3">
		<div class="col">
			ID
			<input class="form-control" type="text" id="id" name="id" placeholder="{{ $user->id }}" aria-label="id" disabled>
		</div>
		<div class="col">
		  	Name
		    <input type="text" class="form-control" id="name" name="name" placeholder="{{ $user->name }}" aria-label="First name">
		</div>
		<div class="col">
	  		Lastname
	 	   <input type="text" class="form-control" id="lastname" name="lastname" placeholder="{{ $user->lastname }}" aria-label="Last name">
		</div>
	</div><br>
	<div><input class="btn btn-primary"  type="submit" value="Submit"></div>
</form>
@endsection