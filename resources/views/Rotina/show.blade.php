@extends("layouts.main")

@section('title')
    $rotina->nome
@stop

@section('conteudo')

    <div class="col-8 m-auto">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $rotina->nome }}" disabled/>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="{{ $rotina->descricao }}" disabled/>
        </div>
        <div class="form-group">
            <label for="caminho">Caminho:</label>
            <input type="text" class="form-control" id="caminho" name="caminho" placeholder="Caminho" value="{{ $rotina->caminho }}" disabled/>
        </div>
        <div class="form-group">
            <label for="menu">Menu:</label>
                <select class="form-control" name="menu" id="menu" disabled>
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
    </div>

@stop