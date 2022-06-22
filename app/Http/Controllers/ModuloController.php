<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;

class ModuloController extends Controller
{
    public function index(){
        $modulos = Modulo::all();
        return view('Modulo/consulta', ['modulos' => $modulos]);
    }

    public function inclusao(){
        return View('Modulo/incluir');
    }

    public function store(Request $request){
        $modulo = new Modulo();
        $modulo->nome = $request->nome;
        $modulo->descricao = $request->descricao;
        $modulo->ordem = $request->ordem;

        $modulo->save();
        return redirect('/Modulo')->with('msg', 'Módulo criado com sucesso');
    }

    public function edit($id){
        $Modulo = Modulo::findOrFail($id);

        return View('Modulo/alterar', ['modulo' => $Modulo]);
    }

    public function update(Request $request){
        $Modulo = Modulo::findOrFail($request->id)->update($request->all());
        return redirect('/Modulo')->with('msg', 'Módulo alterado com sucesso');
    }

    public function destroy($id){
        Modulo::findOrFail($id)->delete();
        return redirect('/Modulo')->with('msg', 'Módulo excluído com sucesso');
    }

    public function show($id){
        $modulo = Modulo::findOrFail($id);

        return view('Modulo.show', ['modulo' => $modulo]);
    }

}
