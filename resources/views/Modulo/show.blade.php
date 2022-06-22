@extends("layouts.main")

@section('title')
    $modulo->nome
@stop

@section('conteudo')

    <div class="col-8 m-auto">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $modulo->nome }}" disabled/>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="{{ $modulo->descricao }}" disabled/>
        </div>
        <div class="form-group">
            <label for="ordem">Ordem:</label>
            <input type="text" class="form-control" id="ordem" name="ordem" placeholder="ordem" value="{{ $modulo->ordem }}" disabled/>
        </div>
    </div>

@stop