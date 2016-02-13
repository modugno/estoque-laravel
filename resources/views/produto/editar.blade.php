@extends('layout.principal')
@section('conteudo')

<h1>Editar produto - {{ $p->nome }}</h1>
<form method="POST" action="/produtos/atualizar">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
	<input type="hidden" name="id" value="{{ $p->id }}">
	<div class="form-group">
		<label>Nome</label>
		<input class="form-control" name="nome" value="{{ $p->nome }}">
	</div>
	<div class="form-group">
		<label>Descricao</label>
		<input class="form-control" name="descricao" value="{{ $p->descricao }}">
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input class="form-control" name="valor" value="{{ $p->valor }}">
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" class="form-control" name="quantidade" value="{{ $p->quantidade }}">
	</div>
	<button type="submit" class="btn
	btn-success btn-block">Atualizar</button>
</form>

@stop