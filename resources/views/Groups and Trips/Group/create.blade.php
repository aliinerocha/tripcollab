@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
    Criar nova Comunidade
@endsection

@section('conteudo')
        <!-- NAV ABA-->
        <div class="bg-light pt-4 pb-4 mb-3 card">
            <div class="d-flex ml-3 align-items-center">
                <a class="stretched-link" href="/groupsandtrips"><i class="material-icons">arrow_back</i></a>
                <div class="container">
                    <h5>Criar nova Comunidade</h5>
                </div>
            </div>
        </div>

        <!-- CARD COM OS DETALHES DO GRUPO DE VIAGEM SELECIONADO -->
        <main class="bg-light pt-4 pb-4">
            <div class="row">
                <form action="{{route('group.store')}}" method="POST" class="col-10 offset-1" enctype="multipart/form-data">
                @csrf
                        <img src="{{url('./img/add.png')}}"  class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto;" alt="...">
                        <div class="form-group mt-4">
                            <label for="tituloComunidade">Titulo da Comunidade:</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" type="text" id="tituloComunidade" value="{{old('name')}}" placeholder="Insira titulo da comunidade" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label for="descricaoComunidade">Descrição da Comunidade:</label>
                            <textarea name="description" type="text" class="form-control @error('description') is-invalid @enderror" type="text" id="descricaoComunidade" value="{{old('description')}}" placeholder="Insira a descrição da comunidade" required></textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <!--  Foto do grupo de viagem -->
                        <div class="form-group mt-4">
                            <label for="customFile">Foto da comunidade</label>
                            <input type="file" class="form-control-file" name="photo" id="customFile" multiple>
                        </div>  
                        <div class="form-group mt-4">
                            <label for="palavrasChave">Palavras-chave:</label>
                            @foreach ($interests as $interest)
                            <div class="form-check @error('interests') is-invalid @enderror"  id="palavrasChave">
                                    <input class="form-check-input" name="interest[]" type="checkbox" value="{{$interest->id}}" id="{{$interest->id}}">
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
                                <option disabled value="padrao">Selecione o nível de visibilidade</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                        <input type="hidden" name="admin" value="{{auth()->user()->id}}">
                        <div class="d-flex justify-content-end mt-4">
                            <a href="{{route('user.listGroupsAndTrips')}}" class="btn botao_atencao mr-2">Cancelar</a>
                            <button type="submit" href="#" class="btn botao">Salvar</button>
                        </div>
                </form>
            </div>
        </main>
@endsection
