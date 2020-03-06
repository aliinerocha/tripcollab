@extends('layouts.template', ['pagina' => 'perfil'], ['footer' => 'true'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesProfile.css')}}">
@endsection

@section('titulo')

@endsection

@section('conteudo')

<!-- Foto da Capa -->
<main class="col-xs-12 capa p-0">
    <img src="@if($user->photo == 'nophoto') {{asset('./img/default_cover.jpg')}}  @else {{asset("storage/usersBackgroundPhotos/$user->background_photo")}} @endif" alt="imagem de fundo escolhida pelo usuário">
</main>
<!-- Foto da Capa -->
<div class="containerDesktop">    
    <div class="container-fluid p-0">

        <section class="usuario bg-light mb-2 px-3 pb-4">
            <!-- Foto do Usuário -->
            <div class="col-xs-12 usuario-foto p-0">
                <img src="@if($user->photo == 'nophoto') {{asset('./img/icone_user.svg')}}  @else {{asset("storage/userPhotos/$user->photo")}} @endif" class="rounded-circle" style="width:100px; height: 100px">
            </div>
            <!-- Foto do Usuário -->

            <!-- Botões -->
            <div class="col-xs-12 usuario-botoes text-right pull-right py-3">
                <div class="row d-flex align-items-center">
                    <div class="dropdown col-11 pr-0 mr-0">
                        <button class="btn btn-link pr-0 mr-2" data-display="static" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <a href="#" class="notification px-2">
                                <i class="fas fa-bell fa-lg"></i><span class="badge">{{$totalRequest}}</span>
                            </a>
                        </button>
                        @if( $totalRequest !== 0 )
                            <div class="dropdown-menu dropdown-menu-right overflow-auto pt-3">
                                @if( $countFriendRequest !== 0 )
                                    <span class="dropdown-item-text text-muted font-weight-bold h6 py-1"> @if ($countFriendRequest <= 1) Notificação @else Notificações @endif de Amizade </span>
                                    <a class="dropdown-item h6 py-1" href="{{route('friendship.index', ['id' => $user->id])}}"> Há {{$countFriendRequest}} @if ($countFriendRequest <= 1) solicitação de amizade pendente @else solicitações de amizade pendentes @endif </a>
                                @endif
                                @if( $totalTR !== 0 ) 
                                    <hr>
                                    <span class="dropdown-item-text text-muted font-weight-bold h6 py-1"> @if ($countTripRequest <= 1) Notificação @else Notificações @endif de Viagem </span>
                                    @foreach( $tripMembersRequests as $key => $trip )
                                        @if( $trip->countTripRequest !== 0 ) 
                                            <a class="dropdown-item h6 py-1" href="{{route('trip.membersIndex', ['id' => $trip->id])}}"> Há {{$trip->countTripRequest}} @if ($trip->countTripRequest <= 1) solicitação pendente @else solicitações pendentes @endif para participar de <br> {{$trip->name}} </a>
                                        @endif
                                    @endforeach
                                @endif
                                @if( $totalGR !== 0 )
                                    <hr>
                                    <span class="dropdown-item-text text-muted font-weight-bold h6 py-1"> @if ($countGroupRequest <= 1) Notificação @else Notificações @endif de Comunidade </span>
                                    @foreach( $groupMembersRequests as $key => $group )
                                        @if( $group->countGroupRequest !== 0 )
                                            <a class="dropdown-item h6 py-1" href="{{route('group.membersIndex', ['id' => $group->id])}}"> Há {{$group->countGroupRequest}} @if ($group->countGroupRequest <=1) solicitação pendente @else solicitações pendentes @endif para participar de <br> {{$group->name}} </a>
                                        @endif
                                    @endforeach 
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="col-1 p-0 pr-2">
                            <a href="{{route('user.edit', ['id' => $user->id])}}">
                                <i class="far fa-edit fa-lg mr-2"></i>
                            </a>
                    </div>
                </div>
            </div>
            <!-- Botões -->

            <!-- Descrição do Usuário -->
            <div class="d-flex">
                <h4 class="nome ml-3 py-1">{{$user->name}}</h4>
                @if($user->public == 0) <i class="material-icons md-18 d-flex align-self-center mb-2 ml-1">lock</i>@endif
            </div>
            
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
            <h5 class="nome mx-3 pt-4">Meus interesses</h5>
            <div class="col-xs-12">
                <div class="row interesses text-justify mx-3 py-2">
                @if (($interests->count()) !== 0)
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
        <section class="amigos bg-light px-3 py-4" style="height: 100vh">
            <h5 class="nome pt-1 pb-1 ml-3">Meus amigos</h5>           

            <!-- Lista de Amigos -->
            <div>

                <h6 class="amigo ml-3">
                    @if($friendlist->count() == 0)
                        Você ainda não possui amigos
                        @elseif($friendlist->count() == 1)
                            {{$friendlist->count()}} amigo
                        @else
                            {{$friendlist->count()}} amigos
                    @endif
                </h6>

                @if(!($friendlist->count() == 0))

                <h6 href="" class="ml-2">
                    {{-- <a href="{{route('friendship.index', ['id' => $user->id])}}" style="text-decoration: underline; color: black">ver todos</a> --}}
                    <a href="{{route('friendship.index', ['id' => $user->id])}}" class="btn botao">Ver todos</a>
                </h6>

                @else

                <h6 href="" class="ml-2">
                    <a href="{{route('friendship.index', ['id' => $user->id])}}" class="btn botao">Ver lista</a>
                </h6>

                @endif

            </div>

            <div class="d-flex flex-column  align-items-center flex-md-row justify-content-md-around">

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
    </div>
</div>
@endsection
