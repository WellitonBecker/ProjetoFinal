@extends("layouts.main")

@section('title')
    Alterar Rotina do Sistema
@stop

@section('conteudo')
    <h3 style="text-align: center;">Alterar Rotina do Sistema</h3>
    <div class="col-8 m-auto">
        <form name="formCadastro" id="formCadastro" method="POST" action="/Rotina/update/{{ $rotina->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $rotina->nome }}"/>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="{{ $rotina->descricao }}"/>
            </div>
            <div class="form-group">
                <label for="caminho">Caminho:</label>
                <input type="text" class="form-control" id="caminho" name="caminho" placeholder="Caminho" value="{{ $rotina->caminho }}"/>
            </div>
            <div class="form-group">
                <label for="menu">Menu:</label>
                    <select class="form-control" name="menu" id="menu">
                        <option value="">Selecione</option>
                            @foreach($menus as $menu)
                                @if($menu->id == $rotina->menu)
                                    <option value="{{ $menu->id }}" selected>{{$menu->nome}}</option>
                                @else
                                    <option value="{{ $menu->id }}">{{$menu->nome}}</option>
                                @endif
                            @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Alterar">
        </form>
    </div>

@stop