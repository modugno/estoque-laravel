<?php namespace estoque\Http\Controllers;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;

use Auth;
use Request;

class LoginController extends Controller {

	public function login() {
		return view('login.login');
	}

    public function auth() {
    	if (Auth::attempt( Request::only('email', 'password') )) {
    		return redirect()->action('ProdutoController@lista');
    	}
    	return redirect()->action('LoginController@login');
    }
}
