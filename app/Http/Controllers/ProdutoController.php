<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index() {
    	$produtos = Produto::all();
    	$total = Produto::all()->count();
    	return view('list-produtos', compact('produtos', 'total'));
    }

    public function create() {
    	return view('include-produto');
    }

    public function store(Request $request) {
		Produto::create($request->all());
    	return redirect()->route('product.index')->with('message', 'Produto criado com sucesso');
    }

    public function show() {

    }

    public function edit($id) {
    	$product = Produto::findOrFail($id);
    	return view('alter-produto', compact('product'));
    }

    public function update(Request $request, $id) {
    	Produto::findOrFail($id);
        unset($request['_token']);
        unset($request['_method']);
    	Produto::whereId($id)->update($request->all());
    	return redirect()->route('product.index')->with('message', 'Produto atualizado com sucesso');
    }

    public function destroy($id) {
    	Produto::findOrFail($id);
    	Produto::delete();
    	return redirect()->route('produtct.index')->with('message', 'Produto excluido com sucesso');
    }
}
