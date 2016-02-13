@extends('layout.principal')
@section('conteudo')

@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
@endforeach
	</ul>
</div>
@endif

<h1>Novo produto</h1>
<form method="POST" action="/produtos/adiciona">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
	<div class="form-group">
		<label>Nome</label>
		<input class="form-control" name="nome" value="{{old('nome')}}">
	</div>
	<div class="form-group">
		<label>Descricao</label>
		<input class="form-control" name="descricao" value="{{old('descricao')}}">
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input class="form-control" name="valor" value="{{old('valor')}}">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" class="form-control" name="quantidade" value="{{old('quantidade')}}">
	</div>
	<button type="submit" class="btn
	btn-primary btn-block">Cadastrar</button>
</form>

@stop