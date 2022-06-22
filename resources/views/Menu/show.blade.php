@extends("layouts.main")

@section('title')
    $menu->nome
@stop

@section('conteudo')

    <div class="col-8 m-auto">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $menu->nome }}" disabled/>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="{{ $menu->descricao }}" disabled/>
        </div>
        <div class="form-group">
            <label for="ordem">Ordem:</label>
            <input type="text" class="form-control" id="ordem" name="ordem" placeholder="ordem" value="{{ $menu->ordem }}" disabled/>
        </div>
        <div class="form-group">
            <label for="modulo">Módulo:</label>
                <select class="form-control" name="modulo" id="modulo" disabled>
                    <option value="">Selecione</option>
                        @foreach($modulos as $modulo)
                            @if($modulo->id == $menu->modulo)
                                <option value="{{ $modulo->id }}" selected>{{$modulo->nome}}</option>
                            @else
                                <option value="{{ $modulo->id }}">{{$modulo->nome}}</option>
                            @endif
                        @endforeach
            </select>
        </div>
    </div>

@stop