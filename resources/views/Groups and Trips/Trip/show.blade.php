
@extends('layouts.template', ['pagina' => 'comunidadesEviagens'])

@section('titulo')
    Detalhes da viagem
@endsection

@section('conteudo')
    <!-- NAV ABA-->
    <div class="bg-light pt-4 pb-4 mb-3">
        <div class="d-flex ml-3 align-items-center">
            <a class="link" href="{{ URL::previous() }}"><i class="material-icons">arrow_back</i></a>
            <div class="container">
                <h5>Minhas viagens</h5>
            </div>
        </div>
    </div>

    <!-- CARD COM OS DETALHES DA VIAGEM SELECIONADA -->
    <main class="bg-light pt-4 pb-4">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="d-flex mt-2 justify-content-center">
                    <div class="col-11 p-0">
                        <img src="@if($trip->photo == 'nophoto') {{url('./img/add.png')}} @else {{asset('storage/' . $trip->photo)}} @endif" class="d-block" style="width: 200px; height: 200px; margin-left: auto; margin-right: auto; @if($trip->photo != 'nophoto') border-radius: 25px @endif" alt="...">
                    </div>
                </div>
                <div>
                    <div class="col-11 p-0">
                        <h5 class="my-4 text-center">{{$trip->name}}</h5>
                    </div>

                @if(
                    ($trip->visibility == 0 && $userStatus && $userStatus->status == 0)
                    ||
                    ($trip->visibility == 0 && !$userStatus)
                    )

                <div class="d-flex justify-content-center">Esta viagem não é aberta ao público</div>

                @else

                    <p class="mb-1">
                        {{$trip->description}}
                    </p>
                    <p class="titulo_campo mb-2">
                        Data:
                    </p>
                    <p class="mb-1">
                        Partida: {{date('d/m/Y', strtotime($trip->departure))}}
                    </p>
                    <p class="mb-4">
                        Retorno: {{date('d/m/Y', strtotime($trip->return_date))}}
                    </p>
                    <p class="titulo_campo mb-2">
                        Administrador:
                    </p>
                    <p class="mb-4">

                        <a href="{{route('user.show', ['id' => $admin->id])}}">
                            <img
                            class="foto-perfil rounded-circle"
                            src="@if($admin->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$admin->photo")}} @endif"
                            alt="{{$admin->name}}">
                        </a>

                        <a href="{{route('user.show', ['id' => $admin->id])}}">{{$admin->name}}</a>

                    </p>
                    <p class="titulo_campo mb-2">
                        Interesses:
                    </p>
                    <p class="mb-4">
                        @foreach($interests as $interest)
                            <button type="button" class="btn btn-outline-primary mt-1">{{$interest->name}}</button>
                        @endforeach
                    </p>
                    <p class="titulo_campo mb-2">
                        Vinculado à comunidade:
                    </p>
                    <p class="mb-4">
                        @if($group == null)
                        Nenhuma comunidade vinculada
                        @else
                        <a href="{{route('group.show', ['id' => $trip->group_id])}}">{{$group->name}}</a>
                        @endif
                    </p>
                    <p class="titulo_campo mb-2">
                        Investimento previsto por participante:
                    </p>
                    <p class="mb-4">
                        R$ {{$trip->foreseen_budget}}
                    </p>
                    <p class="titulo_campo mt-4">
                        Membros confirmados:
                    </p>

                    <div>

                        @foreach($confirmedMembers as $confirmedMember)
                            <a href="{{route('user.show', ['id' => $confirmedMember->user_id])}}">
                                <img
                                class="foto-perfil rounded-circle"
                                src="@if($confirmedMember->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$user->photo")}} @endif"
                                alt="{{$confirmedMember->name}}">
                            </a>
                        @endforeach

                    </div>

                    @if($user->id == $trip->admin)
                        <div class="d-flex mt-3">
                            <a href="{{route('trip.edit',['id' => $trip->id])}}" class="btn btn-info">Editar</a>
                        </div>
                    @endif

                @endif

                    @if(!$userStatus && $trip->visibility == 1)

                    <div class="btn-group">
                        <div class="d-flex mt-3">
                            <a href="{{route('trip.confirmPresence',['tripId' => $trip->id, 'userId' => $user->id])}}" class="btn btn-info">
                                Confirmar presença
                            </a>
                        </div>
                    </div>

                        @elseif(!$userStatus && $trip->visibility == 0)

                    <div class="btn-group">
                        <div>
                            <a href="{{route('trip.confirmPresence',['tripId' => $trip->id, 'userId' => $user->id])}}" class="btn btn-info">
                                Solicitar participação
                            </a>
                        </div>
                    </div>

                    @endif

                    @if($userStatus && $userStatus->status == 0)

                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Solicitação enviada
                        </button>
                        <div class="dropdown-menu">
                            <a href="{{route('trip.cancelPresence',['tripId' => $trip->id, 'userId' => $user->id])}}">
                            Cancelar solicitação
                            </a>
                        </div>
                    </div>

                    @elseif($userStatus && $userStatus->status == 1)
                        <div class="d-flex mt-3">
                            <a href="{{route('trip.cancelPresence',['tripId' => $trip->id, 'userId' => $user->id])}}" class="btn btn-danger">
                                Cancelar presença
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </main>
@endsection
