@extends("layouts.main")

@section('title')
    Rotinas do Sistema
@stop

@section('conteudo')
    <h3 style="text-align: center;">Rotinas do Sistema</h3>
    <a href="Rotina/Incluir" class="btn btn-success active" role="button" aria-pressed="true">Incluir Rotina</a>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td colspan="2">Descrição</td>
            <td>Caminho</td>
            <td class="td-acoes"><label>Ações</label></td>
        </tr>
        @foreach ($rotinas as $rotina)
            <tr>
                <td><a href="/Rotina/{{$rotina->id}}">{{$rotina->id}}</a></td>
                <td>{{$rotina->nome}}</td>
                <td colspan="2">{{$rotina->descricao}}</td>
                <td>{{$rotina->caminho}}</td>
                <td class="td-acoes">
                    <a href="Rotina/Alterar/{{$rotina->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Alterar</a>
                    <form action="/Rotina/{{$rotina->id}}" method="POST" class="form-botoes">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@stop