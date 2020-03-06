@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('css')
<link rel="stylesheet" href="{{url('css/stylesGroupsAndTrips.css')}}">
@endsection

@section('titulo')
    Detalhes da viagem
@endsection

@section('conteudo')
<main>
    {{-- <img src="@if($trip->photo == 'nophoto') {{url('/img/default_cover.jpg')}} @else{{asset($trip->photo)}}@endif" class="img-fluid banner-img" alt="banner"> --}}
    <img src="@if($user->photo == 'nophoto') {{asset('./img/default_cover.jpg')}}  @else {{asset("storage/usersBackgroundPhotos/$user->background_photo")}} @endif" class="img-fluid banner-img" alt="banner">
</main>

    <!-- NAV ABA-->
<div class="containerDesktop">

        <div class="pt-4 pb-4 card bg-light menu-voltar mb-2 ">
            <a  href="{{route('user.listGroupsAndTrips')}}" class="d-flex ml-3 ml-md-0 align-items-center mr-3">
                <i class="material-icons mr-3 back stretched-link">arrow_back</i>      
                <h5>Minhas viagens</h5>
            </a>
        </div>

    <!-- CARD COM OS DETALHES DA VIAGEM SELECIONADA -->
    <main class="bg-light pt-4 pb-5">

            <div class="col-12">
            @include('flash::message')
                <div class="d-flex mt-2 justify-content-center">
                    {{-- <div class="col-11 p-0">
                        <img src="@if($trip->photo == 'nophoto') {{url('./img/add.png')}} @else {{asset('storage/' . $trip->photo)}} @endif" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto; @if($trip->photo != 'nophoto') border-radius: 25px @endif" alt="...">
                    </div> --}}
                </div>
                <div>
                    <div class="ml-3 ml-md-0  mb-4 d-flex justify-content-between align-items-center mr-3">
                        <h1>{{$trip->name}}</h1>
                        @if($user->id == $trip->admin)
                        <a href="{{route('trip.edit', ['id' => $trip->id])}}">
                            <i class="far fa-edit fa-lg" style="color:  #7C7C7C"></i>
                        </a>
                    @endif
                    </div>

                @if(
                    ($trip->visibility == 0 && $userStatus && $userStatus->status == 0 && $trip->admin != $user->id)
                    ||
                    ($trip->visibility == 0 && !$userStatus && $trip->admin != $user->id)
                    )

                <span class="ml-3 ml-md-0 mr-3">Esta viagem não é aberta ao público</span>

                @else
                    <h5 class="ml-3 ml-md-0  mb-4">Detalhes da viagem:</h5>
                    <p class="titulo_campo ml-3 ml-md-0  mb-2">
                        Descrição:
                    </p>
                    <p class="ml-3 ml-md-0  mb-4">
                        {{$trip->description}}
                    </p>
                    <p class="titulo_campo ml-3 ml-md-0  mb-2">
                        Data:
                    </p>
                    <p class="ml-3 ml-md-0  mb-2">
                        Partida: {{date('d/m/Y', strtotime($trip->departure))}}
                    </p>
                    <p class="ml-3 ml-md-0  mb-4">
                        Retorno: {{date('d/m/Y', strtotime($trip->return_date))}}
                    </p>
                    <p class="titulo_campo ml-3 ml-md-0  mb-2">
                        Investimento previsto por participante:
                    </p>
                    <p class="ml-3 ml-md-0  mb-5">
                        R$ {{$trip->foreseen_budget}}
                    </p>
                    <h5 class="titulo_campo ml-3 ml-md-0  mb-4">
                        Administrador:
                    </h5>
                    <p class="ml-3 ml-md-0  mb-5">

                        <a href="{{route('user.show', ['id' => $admin->id])}}">
                            <img
                            class="foto-perfil rounded-circle"
                            src="@if($admin->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$admin->photo")}} @endif"
                            alt="{{$admin->name}}">
                        </a>

                        <a href="{{route('user.show', ['id' => $admin->id])}}">{{$admin->name}}</a>

                    </p>
                    <h5 class="titulo_campo ml-3 ml-md-0  mb-2">
                        Interesses:
                    </h5>
                    <p class="ml-3 ml-md-0  mb-5">
                        @foreach($interests as $interest)
                            <button type="button" class="btn btn-outline-primary mt-1">{{$interest->name}}</button>
                        @endforeach
                    </p>
                    <h5 class="titulo_campo ml-3 ml-md-0  mv-2">
                        Vinculado à comunidade:
                    </h5>
                    <p class="ml-3 ml-md-0  mb-5">
                        @if($group == null)
                        Nenhuma comunidade vinculada
                        @else
                        <a href="{{route('group.show', ['id' => $trip->group_id])}}">{{$group->name}}</a>
                        @endif
                    </p>
                    <div class="ml-3 ml-md-0 mr-3 py-4 mb-3">
                        <h5>Membros confirmados:</h5>
                            {{-- <h6 > {{$confirmedMembers}} @if ($confirmedMembers<=1) membro @else membros @endif </h6> --}}
                            <a href="{{route('trip.membersIndex', ['id' => $trip->id])}}" class="btn botao">Ver todos</a>
                        </div>
                        {{-- <a href="{{route('trip.membersIndex', ['id' => $trip->id])}}">(Ver todos)</a> --}}

                        {{-- @foreach($confirmedMembers as $confirmedMember)
                            <a href="{{route('user.show', ['id' => $confirmedMember->user_id])}}">
                                <img
                                class="foto-perfil rounded-circle"
                                src="@if($confirmedMember->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif"
                                alt="{{$confirmedMember->name}}">
                            </a>
                        @endforeach --}}
                    </div>
                @endif

                    @if(!$userStatus && $trip->visibility == 1 && $trip->admin != auth()->user()->id)
                        <div class="pb-4">
                            <a href="{{route('trip.confirmPresence',['tripId' => $trip->id, 'userId' => $user->id])}}" class="btn botao float-right">
                                Confirmar presença
                            </a>
                        </div>

                        @elseif(!$userStatus && $trip->visibility == 0 && $trip->admin != auth()->user()->id)

                        <div class="ml-3 ml-md-0 mr-3 mt-2">
                            <a href="{{route('trip.confirmPresence',['tripId' => $trip->id, 'userId' => $user->id])}}" class="btn botao">
                                Solicitar participação
                            </a>
                        </div>

                    @endif

                    @if($userStatus && $userStatus->status == 0 && $user->id != $trip->admin)
                    {{-- <div class="btn-group dropup">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Solicitação enviada
                        </button>
                        <div class="dropdown-menu">
                            <a href="{{route('trip.cancelPresence',['tripId' => $trip->id, 'userId' => $user->id])}}">
                            Cancelar solicitação
                            </a>
                        </div>
                    </div> --}}
                    <div class="ml-3 ml-md-0 mr-3 mt-2">
                        <a href="{{route('trip.cancelPresence',['tripId' => $trip->id, 'userId' => $user->id])}}}" class="btn btn-danger">
                        Cancelar solicitação
                        </a>
                    </div>

                    @elseif($userStatus && $userStatus->status == 1 && $trip->admin != auth()->user()->id)
                    <div class="pb-4">
                            <a href="{{route('trip.cancelPresence',['tripId' => $trip->id, 'userId' => $user->id])}}" class="btn botao_atencao float-right">
                                Cancelar presença
                            </a>
                        </div>
                    @endif

                </div>
            </div>
    </main>

</div>

@endsection
