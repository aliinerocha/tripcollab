@extends('layouts.template', ['pagina' => 'perfil'])

@section('titulo')
    Amigos
@endsection

@section('conteudo')
<div class="container-fluid p-0">
        <!-- Foto da Capa -->
        <main class="col-xs-12 capa p-0">
            <img src="@if($user->photo == 'nophoto') {{asset('./img/default_cover.jpg')}}  @else {{asset("storage/usersBackgroundPhotos/$user->background_photo")}} @endif" alt="imagem de fundo escolhida pelo usuário">
        </main>
        <!-- Foto da Capa -->

        <section class="usuario bg-light mb-2 px-3 pb-4">
            <!-- Foto do Usuário -->
            <div class="col-xs-12 usuario-foto p-0">
                <img src="@if($user->photo == 'nophoto') {{asset('./img/icone_user.svg')}}  @else {{asset("storage/userPhotos/$user->photo")}} @endif" class="rounded-circle" style="width:100px; height: 100px">
            </div>
            <!-- Foto do Usuário -->

            <!-- Botões -->

            <div class="dropdown col-xs-12 usuario-botoes text-right pull-right py-3 d-flex justify-content-end">
                <div style="height: 38px;">
                </div>
            </div>
            <!-- Botões -->

            <!-- Nome -->
            <div class="d-flex">
                <h4 class="nome ml-3 py-1">{{$user->name}}</h4>
                @if($user->public == 0) <i class="material-icons md-18 d-flex align-self-center mb-2 ml-1">lock</i>@endif
            </div>

            <section class="amigos bg-light px-3 py-4">
                @if($user->id == auth()->user()->id)
                    <h5 class="nome pt-1 pb-1 ml-3">Meus amigos</h5>
                @else
                    <h5 class="nome pt-1 pb-1 ml-3">Amigos de {{$user->name}}</h5>
                @endif
            <!-- Busca -->
            <div class=" input-group mb-3 py-3">
                <input type="text" class="form-control border-0" placeholder='Pesquisar "Amigos"'>
                <div class="input-group-append">
                    <span class="input-group-text border-0"> <i class="material-icons">search</i></span>
                </div>
            </div>

            <!-- Lista de Amigos -->

            @if($user->id == auth()->user()->id)
                <h6 class="amigo ml-3">
                    @if($friendlist->count() == 0)
                        Você ainda não possui amigos
                        @elseif($friendlist->count() == 1)
                            {{$friendlist->count()}} amigo
                        @else
                            {{$friendlist->count()}} amigos
                    @endif
                </h6>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        @if($user->id == auth()->user()->id)
                            <th>Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($friendlist as $friend)
                    <tr>
                        <td>

                        <a href="{{route('user.show', ['id' => $friend->id])}}">
                            <img
                            class="foto-perfil rounded-circle"
                            src="@if($friend->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$friend->photo")}} @endif"
                            alt="{{$friend->name}}">
                        </a>

                        </td>
                        <td>{{$friend->name}}</td>

                        @if($user->id == auth()->user()->id)
                        <td class="d-flex">
                            <a href="#" class="btn btn-sm btn-info flex-grow-1">Editar</a>
                            <form class="flex-grow-1" action="#" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-sm btn-danger w-100">Remover</button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </section>
        <!-- Amigos -->
    </div>
@endsection
