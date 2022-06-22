@extends("layouts.main")

@section('title')
    Módulos do Sistema
@stop

@section('conteudo')
    <h3 style="text-align: center;">Módulos do Sistema</h3>
    <a href="Modulo/Incluir" class="btn btn-success active" role="button" aria-pressed="true">Incluir Módulo</a>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Ordem</td>
            <td>Nome</td>
            <td>Descrição</td>
            <td class="td-acoes"><label>Ações</label></td>
        </tr>
        @foreach ($modulos as $modulo)
            <tr>
                <td><a href="/Modulo/{{$modulo->id}}">{{$modulo->id}}</a></td>
                <td>{{$modulo->ordem}}</td>
                <td>{{$modulo->nome}}</td>
                <td>{{$modulo->descricao}}</td>
                <td class="td-acoes">
                    <a href="Modulo/Alterar/{{$modulo->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Alterar</a>
                        <form action="/Modulo/{{$modulo->id}}" method="POST" class="form-botoes">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                        </form>
                </td>
            </tr>
        @endforeach
    </table>
@stop