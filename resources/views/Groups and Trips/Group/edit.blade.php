@extends('layouts.template')

@section('titulo')
    Editar Comunidade
@endsection

@section('conteudo')
        <!-- NAV ABA-->
        <div class="bg-light pt-4 pb-4 mb-3">
            <div class="d-flex ml-3 align-items-center">
                <a class="link" href="comunidadesEViagens"><i class="material-icons">arrow_back</i></a>
                <div class="container">
                    <h5>Editar Comunidade</h5>
                </div>
            </div>
        </div>

        <!-- CARD COM OS DETALHES DO GRUPO DE VIAGEM SELECIONADO -->
        <main class="bg-light pt-4 pb-4">
            <div class="row">
                <form action="{{route('group.update', ['id' => $group->id])}}" method="POST" class="col-10 offset-1">
                @csrf
                @method("PUT")
                    <img src="{{url('./img/add.png')}}" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto;" alt="...">
                    <div class="form-group mt-4">
                        <label for="tituloComunidade">Titulo da Comunidade:</label>
                        <input name="name" type="text" class="form-control" id="tituloComunidade" placeholder="Insira titulo da comunidade" value="{{$group->name}}">
                    </div>
                    <div class="form-group mt-4">
                        <label for="descricaoComunidade">Descrição da Comunidade:</label>
                        <textarea name="description" type="text" class="form-control" id="descricaoComunidade" placeholder="Insira descrição da comunidade">{{$group->description}}</textarea>
                    </div>
                    <!--  adicao do campo photo no grupo de viagem -->
                    <div class="form-group mt-4">
                        <label for="">Foto da comunidade</label>
                        <input type="hidden" class="form-control-file" name="photo" value="foto" multiple>
                    </div>
                    <div class="form-group mt-4">
                        <label for="palavrasChave">Palavras-chave:</label>
                        <select mutiple class="form-control" id="palavrasChave">
                            <option disabled selected>Selecione as palavras-chave deste grupo</option>
                            <option>Palavra 1</option>
                            <option>Palavra 2</option>
                            <option>Palavra 3</option>
                            <option>Palavra 4</option>
                            <option>Palavra 5</option>
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="visibilidadeDaComunidade">Visivel ao público?</label>
                        <select name="visibility" class="form-control" id="visibilidadeDaComunidade">
                            <option disabled @if($group->visibility == null) selected @endif value="padrao">Selecione o nível de visibilidade</option>
                            <option @if($group->visibility == 1) selected @endif value="1">Sim</option>
                            <option @if($group->visibility == 0) selected @endif value="0">Não</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="/comunidadesEViagens" class="btn botao_atencao mr-2">Cancelar</a>
                        <button type="submit" href="/comunidadesEViagens" class="btn botao mr-2">Salvar</button>
                    </div>
                </form>
                <form action="{{route('group.destroy',['id' => $group->id])}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </main>
@endsection
