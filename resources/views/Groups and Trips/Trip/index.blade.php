@extends('layouts.template', ['pagina' => 'perfil'])

@section('titulo')
    Participantes da viagem
@endsection

@section('conteudo')

<div class="bg-light pt-4 pb-4 mb-3">
        <div class="d-flex ml-3 align-items-center">
            <a class="link" href="{{ URL::previous() }}"><i class="material-icons">arrow_back</i></a>
            <div class="container">
                <h5>Minhas viagens</h5>
            </div>
        </div>
</div>

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
            </div>
            <div>

            @if(!($tripMembersRequests->count()) == 0 && $user->id == $trip->admin)

            Solicitações para participar da viagem

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tripMembersRequests as $member)
                        <tr>
                            <td>

                            <a href="{{route('user.show', ['id' => $member->id])}}">
                                    <img
                                    class="foto-perfil rounded-circle"
                                    src="@if($member->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$member->photo")}} @endif"
                                    alt="{{$member->name}}">
                                </a>
                            </td>

                            <td>
                                <a href="{{route('user.show', ['id' => $member->id])}}">
                                    {{$member->name}}
                                </a>
                            </td>

                            <td class="d-flex dropdown">
                                <button class="btn btn-sm btn-info flex-grow-1 dropdown-toggle"
                                id="dropdownMenuButton"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                Solicitou participar da viagem
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{route('trip.acceptPresence', ['tripId' => $trip->id, 'userId' => $member->id])}}">
                                        Aceitar
                                    </a>
                                    <a class="dropdown-item" href="{{route('trip.cancelPresence', ['tripId' => $trip->id, 'userId' => $member->id])}}">
                                        Rejeitar
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @endif

            @if($tripMembers->count() == 0)

            Ainda não há membros para essa viagem

            @else

            Existem {{$tripMembers->count()}} membros confirmados nessa viagem

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        @if($user->id == $trip->admin)
                        <th>Ações</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                @foreach($tripMembers as $member)
                    <tr>
                        <td>

                        <a href="{{route('user.show', ['id' => $member->id])}}">
                                <img
                                class="foto-perfil rounded-circle"
                                src="@if($member->photo == 'nophoto') {{asset('./img/icone_user.svg')}} @else {{asset("storage/userPhotos/$member->photo")}} @endif"
                                alt="{{$member->name}}">
                            </a>
                        </td>

                        <td>
                            <a href="{{route('user.show', ['id' => $member->id])}}">
                                {{$member->name}}
                            </a>
                        </td>

                        @if($user->id == $trip->admin)
                        <td class="d-flex">
                            <div class="d-flex mt-3">
                                <a
                                href="{{route('trip.cancelPresence',['tripId' => $trip->id, 'userId' => $member->id])}}"
                                class="btn btn-danger">
                                Cancelar a participação deste usuário
                                </a>
                            </div>
                        </td>
                        @endif

                    </tr>
                @endforeach
                </tbody>
            </table>

            @endif

            </div>
        </div>
    </div>
</main>

@endsection
