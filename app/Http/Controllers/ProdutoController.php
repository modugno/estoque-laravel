<?php
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller {

	public function lista() {
		$produtos = Produto::all();
		return view('produto.listagem', ['produtos' => $produtos]);
	}

	public function listaJson() {
		return Produto::all();
	}

	public function mostra($id) {
		$produto = Produto::find($id);

		if(empty($produto)) {
			return 'Nenhum produto encontrado';
		}

		return view('produto.detalhes')->with('p', $produto);
	}

	public function novo() {
		return view('produto.formulario');
	}

	public function adiciona() {
		Produto::create(Request::all());
		return redirect()
		     ->action('ProdutoController@lista')
		     ->withInput(Request::only('nome'));
	}

	public function remove($id) {
		$produto = Produto::find($id);
		$produto->delete();

		return redirect()
		     ->action('ProdutoController@lista');
	}

	public function editar($id) {
		$produto = Produto::find($id);
		return view('produto.editar', ['p' => $produto]);
	}

	public function atualizar() {
		$id = Request::input('id');
		$produto = Produto::find($id);
		$produto->nome       = Request::input('nome');
		$produto->descricao  = Request::input('descricao');
		$produto->valor      = Request::input('valor');
		$produto->quantidade = Request::input('quantidade');
		$produto->save();
		return redirect()->action('ProdutoController@editar', $id);
	}
}