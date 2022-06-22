@extends("layouts.main")

@section('title')
    Incluir Rotina do Sistema
@stop

@section('conteudo')

    <div class="col-8 m-auto">
        <form name="formCadastro" id="formCadastro" method="POST" action="/Rotina">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"/>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição"/>
            </div>
            <div class="form-group">
                <label for="caminho">Caminho:</label>
                <input type="text" class="form-control" id="caminho" name="caminho" placeholder="Caminho"/>
            </div>
            <div class="form-group">
                <label for="menu">Menu:</label>
                <select class="form-control" name="menu" id="menu">
                    <option value="">Selecione</option>
                    @foreach($menus as $menu)
                        <option value="{{ $menu->id }}">{{$menu->nome}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>

@stop