<?php

namespace App\Http\Controllers;

use App\Models\jogosModel;
use Illuminate\Http\Request;

class jogos extends Controller
{
    public function index()
     {

        $jogos = jogosModel::all();
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create() {
        return view('jogos.create');
    }

    public function store(Request $request) 
    {
        jogosModel::create($request->all());
        return redirect()->route('jogos-index');
    }

    public function edit($id) {
        $jogos = jogosModel::where('id', $id)->first();
        if(!empty($jogos)) {
          return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos-index');
        }
    }
    public function update(Request $request, $id) {
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'Valor' => $request->Valor,
        ];

        jogosModel::where('id', $id)->update($data);
        return redirect()->route('jogos-index');
    }
    public function destroy($id) {
        jogosModel::where('id', $id)->delete();
        return redirect()->route('jogos-index');
    }

}
