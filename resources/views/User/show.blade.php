@extends('layouts.template', ['pagina' => 'perfil'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesProfile.css')}}">
@endsection

@section('titulo')
    Perfil
@endsection

@section('conteudo')
<!-- Foto da Capa -->
<div class="col-xs-12 capa p-0">
    <img src="@if($user->photo == 'nophoto') {{asset('./img/default_cover.jpg')}}  @else {{asset("storage/usersBackgroundPhotos/$user->background_photo")}} @endif" alt="imagem de fundo escolhida pelo usuário">
</div>
<!-- Foto da Capa -->
<div class="containerDesktop">
    <div class="container-fluid p-0" >

        <div class="usuario bg-light mb-2 px-3 pb-4" style="height: 100vh">
            <!-- Foto do Usuário -->
            <div class="usuario-foto p-0">
                <img src="@if($user->photo == 'nophoto') {{asset('./img/icone_user.svg')}}  @else {{asset("storage/userPhotos/$user->photo")}} @endif" class="rounded-circle" style="width:100px; height: 100px">
            </div>
            <!-- Foto do Usuário -->

            <!-- Botões -->


            @if($friendship == null)

            <div class=" text-right py-3">
                <a href="{{route('friendship.add', ['requestedUserID' => $user->id])}}" class="btn botao">Solicitar amizade</a>
            </div>

            @elseif($friendship->status == 0 && $friendship->requester_user_id == auth()->user()->id)

            <div class=" text-right py-3">
                    <a href="{{route('friendship.cancel', ['requestedUserID' => $user->id])}}" class="btn btn-danger">
                    Cancelar solicitação
                    </a>
                {{-- <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Solicitação enviada
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('friendship.cancel', ['requestedUserID' => $user->id])}}">Cancelar solicitação</a>
                </div> --}}
            </div>

            @elseif($friendship->status == 0 && $friendship->requested_user_id == auth()->user()->id)

            <div class="dropdown col-xs-12 usuario-botoes text-right pull-right py-3 d-flex justify-content-end">
                <button class="btn botao dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Solicitou sua amizade
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('friendship.accept', ['requestedUserID' => $user->id])}}">Aceitar</a>
                    <a class="dropdown-item " href="{{route('friendship.delete', ['requestedUserID' => $user->id])}}">Rejeitar</a>
                </div>
            </div>

            @else

            <div class="dropdown col-xs-12 usuario-botoes text-right pull-right py-3 d-flex justify-content-end">
                <button class="btn botao dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Amigos
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('friendship.delete', ['requestedUserID' => $user->id])}}">Desfazer amizade</a>
                </div>
            </div>

            @endif

            <!-- Botões -->

            <!-- Descrição do Usuário -->
            <div class="d-flex">
                <h4 class="nome ml-3 py-1">{{$user->name}}</h4>
                @if($user->public == 0) <i class="material-icons md-18 d-flex align-self-center mb-2 ml-1">lock</i>@endif
            </div>

            @if($user->public == 1 || ($user->public == 0 && ($friendship && $friendship->status == 1)))

            <div class="col-xs-12">
                <div class="row usuario-local ml-3 pt-3">
                    <i class="fas fa-map-marker-alt fa-lg"></i>
                    <h6 class="localizacao ml-2">@if (null == ($user->city && $user->state && $user->country)) A localização não foi informada @else {{$user->city}}, {{$user->state}}, {{$user->country}} @endif</h6>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="row usuario-descricao text-justify mx-3 pt-4 pb-2">
                    {{$user->description}}
                </div>
            </div>
            <!-- Descrição do Usuário -->

            <!-- Interesses -->
            <h5 class="nome mx-3 pt-4">Interesses</h5>

            <div class="col-xs-12">
                <div class="row interesses text-justify mx-3 py-2">
                    @if($interests->count() == 0 )
                        {{$user->name}} ainda não informou nenhum interesse
                    @endif
                </div>
            </div>

            <div class="col-xs-12">
                <div class="row interesses text-justify mx-3 py-2">
                @if (!isset($interests))
                    @foreach($interests as $interest)
                        <button type="button" class="btn btn-outline-primary mt-1 mr-1">{{$interest->name}}</button>
                    @endforeach
                @else Nenhum interesse foi informado
                @endif
                </div>
            </div>

            <!-- Interesses -->

            </section>

            <!-- Amigos -->
            <section class="amigos bg-light px-3 py-4">


                <h5 class="nome pt-1 pb-1">Amigos</h5>

                {{-- @if($friendlist->count() > 0)
                <div class=" input-group mb-3 py-3">
                    <input type="text" class="form-control border-0" placeholder='Pesquisar "Amigos"'>
                    <div class="input-group-append">
                        <span class="input-group-text border-0"> <i class="material-icons">search</i></span>
                    </div>
                </div> 
                @endif  --}}

                <!-- Lista de Amigos -->

                <div>
                    <h6 class="amigo">
                        @if($friendlist->count() == 0)
                            {{$user->name}} ainda não possui amigos
                            @elseif($friendlist->count() == 1)
                                {{$friendlist->count()}} amigo
                            @else
                                {{$friendlist->count()}} amigos
                        @endif
                    </h6>
                    @if($friendlist->count() > 0)
                        {{-- <h6 href="" class="ml-2"><a href="{{route('friendship.index', ['id' => $user->id])}}" style="text-decoration: underline; color: black">ver todos</a></h6> --}}
                        <a href="{{route('friendship.index', ['id' => $user->id])}}" class="btn botao">Ver todos</a>
                    @endif
                </div>

                <div class="d-flex">

                    @foreach($friendlist as $friend)
                        <div class="ml-3 py-4">
                            <a href="{{route('user.show', ['id' => $friend->id])}}" class="d-flex flex-column  align-items-center" style="text-decoration: none; color: black">
                                <img alt="{{$friend->name}}" src="@if($friend->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$friend->photo")}} @endif" class="rounded-circle" style="width:90px; height: 90px">
                                <span>{{$friend->name}}</span>
                            </a>
                        </div>
                    @endforeach

                </div>

            </section>
            <!-- Amigos -->
            @else

            <div class="mt-3 ml-3">Este perfil não é aberto ao público</div>

            @endif
        </div>
    </div>
</div>
@endsection
