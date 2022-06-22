<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Modulo;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::all();
        return view('Menu/consulta', ['menus' => $menus]);
    }

    public function inclusao(){
        $modulos = Modulo::all();
        return View('Menu/incluir', ['modulos' => $modulos]);
    }

    public function store(Request $request){
        $menu = new Menu();
        $menu->nome = $request->nome;
        $menu->descricao = $request->descricao;
        $menu->ordem = $request->ordem;
        $menu->modulo = $request->modulo;

        $menu->save();
        return redirect('/Menu')->with('msg', 'Menu criado com sucesso');
    }

    public function edit($id){
        $modulos = Modulo::all();
        $menu = Menu::findOrFail($id);

        return View('/Menu/alterar', ['modulos' => $modulos, 'menu' => $menu]);
    }

    public function update(Request $request){
        $rotina = Menu::findOrFail($request->id)->update($request->all());
        return redirect('/Menu')->with('msg', 'Menu alterado com sucesso');
    }

    public function destroy($id){
        Menu::findOrFail($id)->delete();
        return redirect('/Menu')->with('msg', 'Menu excluído com sucesso');
    }

    public function show($id){
        $modulos = Modulo::all();
        $menu = Menu::findOrFail($id);

        return view('Menu.show', ['modulos' => $modulos, 'menu' => $menu]);
    }

}
