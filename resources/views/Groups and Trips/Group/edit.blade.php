@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Editar Comunidade
@endsection

@section('conteudo')
    <div class="containerDesktop">
        <!-- NAV ABA-->
        <div class="pt-4 pb-4 card menu-voltar">
            <a  href="{{route('group.show',['id' => $group->id])}}" class="d-flex ml-3 ml-md-0 align-items-center mr-3">
                <i class="material-icons mr-3 back stretched-link">arrow_back</i>      
                <h5>Voltar</h5>
            </a>
    </div>

        <!-- CARD COM OS DETALHES DO GRUPO-->
        <main class="bg-light pt-4 pb-4">
            <div class="row">
                <form action="{{route('group.update', ['id' => $group->id])}}" method="POST" class="col-10 offset-1">
                @csrf
                @method("PUT")
                    <img src="{{url('./img/add.png')}}" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto;" alt="...">
                    <div class="form-group mt-4">
                        <label for="tituloComunidade">Titulo da Comunidade:</label>
                        <input name="name" type="text" class="form-control" id="tituloComunidade" placeholder="Insira titulo da comunidade" value="{{$group->name}}" required>
                    </div>
                    <div class="form-group mt-4">
                        <label for="descricaoComunidade">Descrição da Comunidade:</label>
                        <textarea name="description" type="text" class="form-control" id="descricaoComunidade" placeholder="Insira descrição da comunidade" required>{{$group->description}}</textarea>
                    </div>
                    <!--  Foto do grupo de viagem -->
                    <div class="form-group mt-4">
                        <label for="">Foto da comunidade</label>
                        <input type="file" class="form-control-file" name="photo" value="foto" multiple>
                    </div>
                    <div class="form-group mt-4">
                        <label for="palavrasChave">Palavras-chave:</label>
                        @foreach ($interests as $interest)
                            <div class="form-check @error('interests') is-invalid @enderror"  id="palavrasChave">
                                    <input class="form-check-input" name="interest[]" type="checkbox" value="{{$interest->id}}" id="{{$interest->id}}"@if($selectedInterests->contains('interest_id', $interest->id)) checked @endif >
                                    <label class="form-check-label" for="{{$interest->id}}">
                                        {{$interest->name}}
                                    </label>
                                @error('interests')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        @endforeach
                    </div>
                    <div class="form-group mt-4">
                        <label for="visibilidadeDaComunidade">Visivel ao público?</label>
                        <select name="visibility" class="form-control" id="visibilidadeDaComunidade">
                            <option disabled @if($group->visibility == null) selected @endif value="padrao">Selecione o nível de visibilidade</option>
                            <option @if($group->visibility == 1) selected @endif value="1">Sim</option>
                            <option @if($group->visibility == 0) selected @endif value="0">Não</option>
                        </select>
                    </div>
                    <div class="row d-flex justify-content-end m-0 pb-5">
                            <div class="d-flex justify-content-end m-0">
                                <a href="{{route('group.show', ['id' => $group->id])}}" class="btn botao_atencao mr-2">Cancelar</a>
                                <button type="submit" href="#" class="btn botao mr-2">Salvar</button>
                            </div>
                    </div>
                </form>
            </div>
        </main>
                <div class="mt-3 py-4 bg-light">
                        <form action="{{route('group.destroy',['id' => $group->id])}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <div class="d-flex align-items-center justify-content-between justify-content-md-end pt-3 col-10 offset-1">
                                <span class="pr-3">Excluir comunidade permanentemente</span>
                                <button type="submit" class="btn btn-secondary">Excluir</button>
                            </div>
                        </form>
                </div>
    </div>
@endsection
