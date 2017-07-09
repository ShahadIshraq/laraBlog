@extends ('layouts.master')

@section ('content')
	
	<div class="col-sm-8">
		<h1>Login</h1>
		<form method="POST" action="/signin">
			{{csrf_field()}}

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Login</button>
			</div>

			<div class="form-group">@include('layouts.errors')</div>

		</form>
	</div>

@endsection