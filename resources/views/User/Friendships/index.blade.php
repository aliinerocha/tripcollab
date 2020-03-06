@extends('layouts.template', ['pagina' => 'perfil'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection


@section('titulo')
    Amigos
@endsection

@section('conteudo')

<!-- Foto da Capa -->
<main class="col-xs-12 capa p-0">
    <img src="@if($user->photo == 'nophoto') {{asset('./img/default_cover.jpg')}}  @else {{asset("storage/usersBackgroundPhotos/$user->background_photo")}} @endif" alt="imagem de fundo escolhida pelo usuário">
</main>
<!-- Foto da Capa -->

<div class="containerDesktop">

    <section class="usuario bg-light mb-2 px-3 pb-4">
        <!-- Foto do Usuário -->
        <div class="col-xs-12 usuario-foto p-0">
            <img src="@if($user->photo == 'nophoto') {{asset('./img/icone_user.svg')}}  @else {{asset("storage/userPhotos/$user->photo")}} @endif" class="rounded-circle" style="width:100px; height: 100px">
        </div>      

        <!-- Botões -->
        <div class="dropdown col-xs-12 usuario-botoes text-right pull-right py-3 d-flex justify-content-end">
            <div style="height: 38px;">
            </div>
        </div>        

        <!-- Nome -->
        <div class="d-flex">
            <h4 class="nome ml-3 py-1">{{$user->name}}</h4>
            @if($user->public == 0) <i class="material-icons md-18 d-flex align-self-center mb-2 ml-1">lock</i>@endif
        </div>

            @if(($user->id == auth()->user()->id) || $user->public == 1 || ($user->public == 0 && ($friendship && $friendship->status == 1)))

        <section class="bg-light px-3 py-4" style="height: 100vh">
            @if($user->id == auth()->user()->id)
            <h5 class="nome pt-1 pb-4">Meus amigos</h5>
            @else
            <h5 class="nome pt-1 pb-4">Amigos de {{$user->name}}</h5>
            @endif

            <!-- Busca -->
            
            {{-- @if($friendlist->count() > 0)
            <div class=" input-group mb-3 py-3">
                <input type="text" class="form-control border-0" placeholder='Pesquisar "Amigos"'>
                <div class="input-group-append">
                    <span class="input-group-text border-0"> <i class="material-icons">search</i></span>
                </div>
            </div>
            @endif --}}

            <!-- Lista de Amigos -->

            @if($user->id == auth()->user()->id)

                @if($friendshipRequestors->count() != 0)

                <h6 class="amigo">
                    <b>Você possui {{$friendshipRequestors->count()}} solicitações de amizade</b>
                </h6>

                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th >Foto</th>
                            <th>Nome</th>
                            <th >Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($friendshipRequestors as $requestor)
                        <tr class="text-center">
                            <td >

                            <a href="{{route('user.show', ['id' => $requestor->id])}}">
                                <img
                                class="foto-perfil rounded-circle"
                                src="@if($requestor->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$requestor->photo")}} @endif"
                                alt="{{$requestor->name}}">
                            </a>

                            </td>
                            <td>{{$requestor->name}}</td>

                            <td class="dropdown">
                                <div class="d-flex">
                                    <button class="btn btn-sm btn-info flex-grow-1 dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Solicitou sua amizade</button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{route('friendship.accept', ['requestedUserID' => $requestor->id])}}">Aceitar</a>
                                        <a class="dropdown-item" href="{{route('friendship.delete', ['requestedUserID' => $requestor->id])}}">Rejeitar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @endif

            @endif

            <h6 class="amigo">
                @if($friendlist->count() == 0 && auth()->user()->id == $user->id)
                    Você ainda não possui amigos
                @elseif($friendlist->count() == 1)
                    {{$friendlist->count()}} amigo
                @else
                    {{$friendlist->count()}} amigos
                @endif
            </h6>

            @if($friendlist->count() > 0)

            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th  >Foto</th>
                        <th  >Nome</th>
                        @if($user->id == auth()->user()->id)
                            <th >Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($friendlist as $friend)
                    <tr class="text-center">
                        <td  >

                        <a href="{{route('user.show', ['id' => $friend->id])}}">
                            <img
                            class="foto-perfil rounded-circle"
                            src="@if($friend->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$friend->photo")}} @endif"
                            alt="{{$friend->name}}">
                        </a>

                        </td>
                        <td  >{{$friend->name}}</td>

                        @if($user->id == auth()->user()->id)
                        <td  >
                                <a href="{{route('friendship.delete', ['requestedUserID' => $friend->id])}}" class="btn btn-danger " style=" width: max-content;">Desfazer amizade</a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @endif
        @else
        <div class="">Este perfil não é aberto ao público</div>
        @endif

    </section>

</div>

@endsection
