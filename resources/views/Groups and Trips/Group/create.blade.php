@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('conteudo')

<main>
    <img src="@if($user->photo == 'nophoto') {{asset('./img/default_cover.jpg')}}  @else {{asset("storage/usersBackgroundPhotos/$user->background_photo")}} @endif" class="img-fluid banner-img" alt="banner">
</main>
    <div class="containerDesktop">

        <div class="pt-4 pb-4 card bg-light menu-voltar mb-2 ">
            <a  href="{{route('user.listGroupsAndTrips')}}" class="d-flex ml-3 ml-md-0 align-items-center mr-3">
                <i class="material-icons mr-3 back stretched-link">arrow_back</i>      
                <h5>Criar nova comunidade</h5>
            </a>
        </div>

        <!-- CARD COM OS DETALHES DO GRUPO  -->
        <main class="bg-light pt-2 pb-4">

                <form action="{{route('group.store')}}" method="POST" class="col-12" enctype="multipart/form-data">
                @csrf
                        {{-- <img src="{{url('./img/add.png')}}"  class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto;" alt="..."> --}}
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
                            <a href="{{route('user.listGroupsAndTrips')}}" class="btn btn-secondary mr-2">Cancelar</a>
                            <button type="submit" href="#" class="btn botao">Salvar</button>
                        </div>
                </form>

        </main>
    </div>
@endsection
