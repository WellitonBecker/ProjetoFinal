<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rotina;
use App\Models\Menu;

class RotinaController extends Controller
{
    public function index(){
        $rotinas = Rotina::all();
        return view('Rotina/consulta', ['rotinas' => $rotinas]);
    }

    public function inclusao(){
        $menus = Menu::all();
        return View('Rotina/incluir', ['menus' => $menus]);
    }

    public function store(Request $request){
        $rotina = new Rotina();
        $rotina->nome = $request->nome;
        $rotina->descricao = $request->descricao;
        $rotina->caminho = $request->caminho;
        $rotina->menu = $request->menu;

        $rotina->save();
        return redirect('/Rotina')->with('msg', 'Rotina Criada com sucesso');
    }

    public function edit($id){
        $menus  = Menu::all();
        $rotina = Rotina::findOrFail($id);

        return View('Rotina/alterar', ['menus' => $menus, 'rotina' => $rotina]);
    }

    public function update(Request $request){
        $rotina = Rotina::findOrFail($request->id)->update($request->all());
        return redirect('/Rotina')->with('msg', 'Rotina alterada com sucesso');
    }

    public function destroy($id){
        Rotina::findOrFail($id)->delete();
        return redirect('/Rotina')->with('msg', 'Rotina excluída com sucesso');
    }

    public function show($id){
        $menus  = Menu::all();
        $rotina = Rotina::findOrFail($id);

        return view('Rotina.show', ['menus' => $menus, 'rotina' => $rotina]);
    }

}
