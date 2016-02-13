@extends('layout.principal')
@section('conteudo')

<div class="row">
	<div class="col-md-4">
		<form action="{{action('LoginController@auth')}}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label>E-mail</label>
				<input type="email" class="form-control" name="email">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Entrar</button>
			</div>
		</form>
	</div>
</div>
@stop