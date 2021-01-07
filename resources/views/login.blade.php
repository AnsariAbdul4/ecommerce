@extends('template')
@section('container')

{{ session('success') }}
<form action="login" method="POST" >
	@csrf
<div class="row">
	<h1 class="col-md-12">{{ __('lang.Login Page') }}</h1> <br />
  <div class="col-md-1" >
		<label>{{ __('lang.Email') }}</label>
	</div>
	<div class="col-md-4" >		
		<input type="email" name="email" /> <br />
	</div>
</div> <br />
<div class="row">	
	<div class="col-md-1" >
		<label>{{ __('lang.Password') }}</label>
	</div>
	<div class="col-md-4" >
		<input type="password" name="password" /> <br />
	</div>
</div> <br>
<div class="row">
	<div class="col-md-6" >
		<input type="submit" value="Login" class="btn btn-success">
	</div>
</div> <br>
</form>
@endsection