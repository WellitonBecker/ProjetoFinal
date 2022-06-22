@extends("layouts.main")

@section('title')
    Alterar Rotina do Sistema
@stop

@section('conteudo')
    <h3 style="text-align: center;">Alterar Módulo do Sistema</h3>
    <div class="col-8 m-auto">
        <form name="formCadastro" id="formCadastro" method="POST" action="/Menu/update/{{ $menu->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $menu->nome }}"/>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="{{ $menu->descricao }}"/>
            </div>
            <div class="form-group">
                <label for="ordem">Ordem:</label>
                <input type="number" class="form-control" id="ordem" name="ordem" placeholder="Ordem" value="{{ $menu->ordem }}"/>
            </div>
            <div class="form-group">
                <label for="menu">Módulo do Sistema:</label>
                    <select class="form-control" name="modulo" id="modulo">
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
            <input type="submit" class="btn btn-primary" value="Alterar">
        </form>
    </div>

@stop