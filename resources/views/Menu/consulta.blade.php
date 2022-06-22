@extends("layouts.main")

@section('title')
    Menus do Sistema
@stop

@section('conteudo')
    <h3 style="text-align: center;">Menus do Sistema</h3>
    <a href="Menu/Incluir" class="btn btn-success active" role="button" aria-pressed="true">Incluir Menu</a>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Descrição</td>
            <td class="td-acoes"><label>Ações</label></td>
        </tr>
        @foreach ($menus as $menu)
            <tr>
                <td><a href="/Menu/{{$menu->id}}">{{$menu->id}}</a></td>
                <td>{{$menu->nome}}</td>
                <td>{{$menu->descricao}}</td>
                <td class="td-acoes">
                    <a href="Menu/Alterar/{{$menu->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Alterar</a>
                        <form action="/Menu/{{$menu->id}}" method="POST" class="form-botoes">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                        </form>
                </td>
            </tr>
        @endforeach
    </table>
@stop