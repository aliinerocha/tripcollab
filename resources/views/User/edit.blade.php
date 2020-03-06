@extends('layouts.template', ['pagina' => 'perfil'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesProfile.css')}}">
@endsection

@section('titulo')
    Perfil
@endsection

@section('conteudo')

<!-- Formulário de edição-->
<div class="containerDesktop">
    <div class="container-fluid p-0">
        <!--  Cadastro do Usuário -->
        <form method="POST" action="{{route('user.update', ['id' => $user->id])}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <section class="usuario bg-light mb-2 px-3 py-4">
                <h5 class="nome ml-3 py-1">Cadastro do Usuário</h5>

                <div class="form-row mx-3">
                    <div class="col-sm-6 mb-3">
                            <label for="nome">Nome</label>
                            <input name="name" type="text" class="form-control" id="nome" placeholder="Digite o seu nome" value="{{$user->name}}" required>
                        <div class="valid-feedback">
                        Ok!
                        </div>
                    </div>

                    <div class="col-sm-6 mb-3">
                            <label for="email">E-mail</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Digite o seu e-mail" value="{{$user->email}}" required>
                        <div class="valid-feedback">
                            Ok!
                        </div>
                    </div>
                </div>
            </section>           
            <!--  Perfil do Usuário -->
            <section class="usuario bg-light mb-2 px-3 py-4">
                <h5 class="nome ml-3 pb-3">Perfil do Usuário</h5>

                <!-- Foto da Capa -->
                <h6 class="capa ml-3">Foto da capa</h6>
                <div class="col-xs-12 capa p-0 mx-3 my-3 border">
                    <img class="rounded" src="@if($user->background_photo == 'nophoto') {{asset('./img/default_cover.jpg')}}  @else {{asset("storage/usersBackgroundPhotos/$user->background_photo")}} @endif">
                </div>

                <div class="form-group col-12 m-3 pb-3">
                    <label for="foto_fundo">Selecione um arquivo</label>
                    <input class="form-control-file is-invalid" name="background_photo" type="file" id="foto_fundo">
                </div>

                <!-- Foto do Usuário -->
                <h6 class="foto ml-3">Foto do usuário</h6>
                <div class="col-xs-12 foto p-0 mx-4 my-3">
                    <img src="@if($user->photo == 'nophoto') {{asset('./img/icone_user.svg')}}  @else {{asset("storage/userPhotos/$user->photo")}} @endif" class="rounded-circle border" style="width:100px; height: 100px">
                </div>

                <div class="form-group col-12 m-3 pb-3">
                    <label for="foto">Selecione um arquivo</label>
                    <input class="form-control-file is-invalid" name="photo" type="file" id="foto">
                </div> 

                <!-- Dados do Usuário -->
                <h6 class="foto ml-3 my-3">Dados do usuário</h6>
                <div class="form-row mx-3 my-3">
                    <div class="col-md-4 mb-3">
                            <label for="cidade">Cidade</label>
                            <input name="city" type="text" class="form-control" id="cidade" placeholder="Digite a sua cidade" value="{{$user->city}}" >
                        <div class="valid-feedback">
                            Ok!
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                            <label for="estado">Estado</label>
                            <input type="text" class="form-control" name="state" id="estado" placeholder="Digite o seu estado" value="{{$user->state}}" >
                        <div class="valid-feedback">
                            Ok!
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                            <label for="pais">País</label>
                            <input type="text" class="form-control" name="country" id="pais" placeholder="Digite o seu país" value="{{$user->country}}">
                        <div class="valid-feedback">
                            Ok!
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                            <label for="dataDeNascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" name="birthday" id="dataDeNascimento" value="{{$user->birthday}}">
                        <div class="valid-feedback">
                            Ok!
                        </div>
                    </div>
                    
                    <div class="col-12 my-3">
                        <label for="descricao">Descrição do usuário</label>
                        <textarea name="description" id="descricao" cols="30" rows="5" class="form-control" placeholder="Insira sua descrição aqui">{{$user->description}}</textarea>
                    </div>

                    <div class="col-12 my-3">
                        <label for="visibilidade">Visibilidade do perfil</label>
                        <select name="public" class="form-control" cols="30" rows="5" id="visibilidade">
                            <option @if($user->public == 0) selected @endif value="0">Privado</option>
                            <option @if($user->public == 1) selected @endif value="1">Público</option>
                        </select>
                    </div>
                </div>
            </section>

            <!-- Interesses -->
            <section class="usuario bg-light mb-2 px-3 py-2">
                <h5 class="nome">Interesses:</h5>
                <div class="col-12 my-3">
                    @foreach ($interests as $interest)
                    <div class="form-check @error('interests') is-invalid @enderror"  id="palavrasChave">
                        <input class="form-check-input" name="interests[]" type="checkbox" value="{{$interest->id}}" id="{{$interest->id}}" @if($selectedInterests->contains('interest_id', $interest->id)) checked @endif">
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

                <div class="form-group">                
                    <div class="col d-flex justify-content-end">
                    <a href="{{route('home')}}" type="submit" class="btn btn-secondary mr-3">Cancelar</a>
                        <button type="submit" class="btn botao">Atualizar Perfil</button>
                    </div>
                </div>
            </section>
        </form>
    </div>
    
    <!-- Formulário de exclusão-->
    <section class="usuario bg-light mb-2 px-3 py-2">
        <form action="{{route('user.delete', $user->id)}}" method="post">
            @csrf
            @method('DELETE')        
            <div class="col d-flex justify-content-end align-items-center">
                <span class="pr-3">Excluir perfil permanentemente</span>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </div>
        </form>
    </section>
</div>

@endsection



                





                

            

