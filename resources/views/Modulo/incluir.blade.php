@extends("layouts.main")

@section('title')
    Incluir Módulo do Sistema
@stop

@section('conteudo')

    <div class="col-8 m-auto">
        <form name="formCadastro" id="formCadastro" method="POST" action="/Modulo">
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
                <label for="ordem">Ordem:</label>
                <input type="number" class="form-control" id="ordem" name="ordem" placeholder="Ordem"/>
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>

@stop